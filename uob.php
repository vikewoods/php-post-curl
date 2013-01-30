<?

$account_number = "5039000645";
$swift_number = "FAEASGS1";
$bank_code = "7199";
$branch_code = "003";
$bank_reference = "UOB-1242-X93";


echo "Connnecting to UOB Server(202.42.213.5)...\n"
echo "\n\n\n\n";
echo "Generating user salt(sha1): ".sha1(md5(rand(100, 89805980)));
sleep(15);
echo "====================================================================\n";
echo "Account number:                     ". $account_number. "\n";
echo "Swift Code:                         ". $swift_number. "\n";
echo "Bank Code:                          ". $bank_code. "\n";
echo "Banck Branch:                       ". $branch_code. "\n";
echo "Bank reference:                     ". $bank_reference. "\n";
echo "====================================================================\n";
echo "\n\n";
sleep(3);
echo "Getting account data ..."
sleep(15);
echo "\n\n";
echo "";


?>
