// Get user's IP address
$user_ip = $_SERVER['REMOTE_ADDR'];

// Send a request to freegeoip.net to get user's country code
$geo = json_decode(file_get_contents("http://freegeoip.net/json/{$user_ip}"));

// Set default language to English
$lang = 'en';

// If country code is available, use it to determine the language
if (!empty($geo->country_code)) {
    switch ($geo->country_code) {
        case 'FR':
            $lang = 'fr';
            break;
        case 'ES':
            $lang = 'es';
            break;
        // Add more cases for other countries and languages
    }
}

// Redirect the user to the appropriate page
header("Location: https://suyeon240park.github.io/Suyeon_Park_Portfolio.en/");
exit();