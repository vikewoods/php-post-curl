<?php

public function SubmitForm($url='http://alcomp.net.ua/notebooks', $data=''){

	//Check for curl
	if( function_exists('curl_exec') ){

		for ($i=1; $i < 9; $i++) { 
			$post_data['option'.$i.'_a[]'] = 'develop';
		}
		$post_data['order'] = 'ASC';
		$post_data['sort'] = 'p.price';
		$post_data['currency'] = 'UAH';
		$post_data['route'] = 'product/category';
		$post_data['actrion'] = 'submit';

		foreach ( $post_data as $key => $value ) {
		    $post_items[] = $key . '=' . $value;
		}

		$post_string = implode ('&', $post_items);

		$curl_connection = curl_init($url);
		curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($curl_connection, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
    curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
		$result = curl_exec($curl_connection);
		print_r(curl_getinfo($curl_connection));
		echo curl_errno($curl_connection) . '-' .
		     curl_error($curl_connection);
		curl_close($curl_connection);

		
	}else{
		echo "Please install curl!";
		return;
	}


}

?>