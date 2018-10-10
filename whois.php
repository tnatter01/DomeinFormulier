<?php
/**
This class can be used for lokking up domain name for various whois domains TLD.
// Created by Keshav Mishra.
 **/
class whois {
    // variable of extensions, user can add more extension which found in future in the specefied format.
    public $ext = array(
        '.nl' => array('whois.domain-registry.nl','is free'),
        '.com' => array('whois.crsnic.net','No match for'),
        '.net' => array('whois.crsnic.net','No match for'),
        '.org' => array('whois.publicinterestregistry.net','NOT FOUND'),
        '.be' => array('whois.dns.be','No such domain'),
        '.info' => array('whois.afilias.net','NOT FOUND'),
        '.eu' => array('whois.eu','FREE'),
        '.de' => array('whois.denic.de','FREE'),
        '.co.uk' => array('whois.nic.uk','No match'),
    );
    // variable for storing error reports.
    public $error = null;
    // default function to run first when class instantiated.

    /*function __construct(){
        ksort($this->ext);
    }*/

    // function for checking domain name.
    function available($domain){
        $domain = trim($domain);
        if (eregi('^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)*[a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?$',$domain) != 1){
            $this->error = 'Ongeldig domein (Alleen letters en cijfers) ('.$domain.').';
            return false;
        }
        preg_match('@^(http://www\.|http://|www\.)?([^/]+)@i', $domain, $preg_metch_result);
        $f_result = '';
        $domain = $preg_metch_result[2];
        $domain_name_array = explode('.', $domain);
        $domain_domain = null;
        for($i = 1; $i < count($domain_name_array); $i++){
            $domain_domain .= ".".$domain_name_array[$i];
        }
        $ext_in_list = false;

        if (array_key_exists($domain_domain, $this->ext)){
            $ext_in_list = true;
        }

        if(strlen($domain) > 0 && $ext_in_list){
            $server = '';

            $server = $this->ext[$domain_domain][0];
            $lookup_result = gethostbyname($server);

            if ($lookup_result == $server){
                $this->error = 'Ongeldige extensie - '.$domain_domain.'. / server heeft uitgaande verzoeken geblokkeerd naar '.$server.'.';
                return false;
            }

            $fs = fsockopen($server, 43,$errno,$errstr,10);
            if (!$fs || ($errstr != "")){
                $this->error = 'Error: ('.$server.') '.$errstr.' ('.$errno.')';
                return false;
            }

            fputs($fs, "$domain\r\n");
            while( !feof($fs) ) {
                $f_result .= fgets($fs,128);
            }

            fclose($fs);

            if($domain_domain == 'org'){
                nl2br($f_result);
            }

            if(eregi($this->ext[$domain_domain][1], $f_result)){
                return true;
            } else {
                return false;
            }

        } else {
            $this->error = 'Ongeldige domeinnaam';
        }
        return false;
    }

}
$whois = new whois;

?>

<?php
$msg = "&nbsp;";
if(!empty($_REQUEST['search'])){
    if(!empty($_REQUEST['domain']) && !empty($_REQUEST['domain_ext'])){
        $_REQUEST['domain'] = str_replace($_REQUEST['domain_ext'], '', strtolower($_REQUEST['domain']));
        $domain = str_replace('www.', '', $_REQUEST['domain'].$_REQUEST['domain_ext']);

        $result = $whois->available($domain);

        if(empty($whois->error)){
            switch($result){
                case true:
                    echo("<span style='color: green'>De domeinnaam www.".($domain)." is beschikbaar.</span></a>");
                    break;
                case false:
                    $msg = '<span style="color: red">De domeinnaam <strong>'.($domain).'</strong> is al in gebruik.';
                    break;
            }
        }else{
            $msg = $whois->error;
        }
    }else{
        $msg = "Vul een domeinnaam in om te zoeken!";
    }
}
echo $msg;
return true;


?>
