add_filter( 'wpcf7_form_elements', 'add_ip_to_cf7_form' );
function add_ip_to_cf7_form( $form ) {
$ip = $_SERVER['REMOTE_ADDR'];
$form .= '<input type="hidden" name="useripnr" value="' . $ip . '">';
return $form;
}