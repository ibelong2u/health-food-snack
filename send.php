<?

$m_FormMail .= "\nName: ";
$m_FormMail .= $name;
$m_FormMail .= "\nPhone: ";
$m_FormMail .= $phone;
$m_FormMail .= "\nEmail: ";
$m_FormMail .= $email;
$m_FormMail .= "\n\nMessage: ";
$m_FormMail .= $message;
mail("email@host.com", "Contact Form", $m_FormMail, "From: $first <$email>" );
header("Location: thanks.html");

?>