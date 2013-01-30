<?

$account_number = "5039000645";
$swift_number = "FAEASGS1";
$bank_code = "7199";
$branch_code = "003";
$bank_reference = "UOB-1242-X93";

echo "\n\n\n";

echo "Connnecting to UOB Server(202.42.213.5)...\n";
echo "\n\n\n\n";
echo "Generating user salt(sha1): ".sha1(md5(rand(100, 89805980)))."\n\n\n";
sleep(15);
echo "Welcome to UOB Terminal eBanking system\n\n\n";
echo "THIS IS ONLY FOR AUTHORIZE INTERNAL BANK(UOB) USAGE AND BANK(UOB) MANAGERS USAGE\n\n\n";
echo "Legacy notice: \n\n";
echo "Use Of Information And Materials\n\n";
echo "The contents of this website and/or made available through the Services are provided for general information only and should not be used as a basis for making any specific investment, business or commercial decision. You should at all times consult your professional advisers and obtain independent verification of such information and data before making any decision based thereon.\n\n";
echo "\n\n";
sleep(5);
echo "Deemed Permission\n\n";
echo "By using or accessing this website and/or the Services, you are deemed to have given permission to the UOB Group to disclose to anyone information relating to yourself, including customer information, in connection with any of your accounts with any member of the UOB Group as UOB shall deem fit for any purpose without incurring any liability of whatsoever nature.";
echo "SSL Key to logon: ".sha1(md5(rand(100, 89805980)))."\n\n";
echo "====================================================================\n";
echo "Account number:                     ". $account_number. "\n";
echo "Swift Code:                         ". $swift_number. "\n";
echo "Bank Code:                          ". $bank_code. "\n";
echo "Banck Branch:                       ". $branch_code. "\n";
echo "Bank reference:                     ". $bank_reference. "\n";
echo "====================================================================\n";
echo "\n\n";
sleep(3);
echo "Getting account data ...";
sleep(15);
echo "\n\n";
echo "Bank response:";
echo "\n";
sleep(47);
echo "====================================================================\n";
echo "ACCOUNT ON HOLD BY BANK AND VALID AND WILL BE CLOSED ON 17 March 2013\n";
echo "====================================================================\n";
echo "\n";
echo "\n";
echo "====================================================================\n";
echo "Closing connection \n\n\n".sha1(md5(rand(100, 89805980)))."\n\n";;


?>
