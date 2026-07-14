<?php
$data = array();
if (isset($_POST['packagename'])) 
	
            {
			$packagename = $_POST['packagename'];
				
		//	[1] Milan Kanani Cricket App 
		
				if(stripos($packagename, 'com.sporthdlive.livecrickettv.hdwatchlivecricket') !== false)
				
				{					
					array_push($data, array(

					"admob_splash_interid"=>"",
					"admob_interid"=>"",
					"admob_bannerid"=>"",
					"admob_medium_rectangleid"=>"",
					"admob_small_nativeid"=>"",
					"admob_small_native_bannerid"=>"",
					"admob_nativeid"=>"",
					"admob_appopenid"=>"",
										
					"adx_splash_inter_id"=>"",					
					"adx_inter_id"=>"/6499/example/interstitial",				
					"adx_banner_id"=>"/6499/example/banner",
					"adx_medium_rectangleid"=>"",
					"adx_small_native_id"=>"/6499/example/native",
					"adx_small_native_banner_id"=>"/6499/example/native",
					"adx_native_id"=>"/6499/example/native",
					"adx_appopen_id"=>"/6499/example/app-open",	
					
					"fb_splash_inter_id"=>"",
					"fb_inter_id"=>"VID_HD_16_9_46S_APP_INSTALL#YOUR_PLACEMENT_ID",  // VID_HD_16_9_46S_APP_INSTALL#YOUR_PLACEMENT_ID
					"fb_banner_id"=>"",
					"fb_medium_rectangle_id"=>"",
					"fb_native_id"=>"",
					"fb_native_banner_id"=>"",
									
					"ads_show"=>"false",                        // true , false
					"app_inter_dialog_show"=>"false",         // true , false
					"preload_inter_ads"=>"true",             // true , false
					"preload_native_ads"=>"true",           // true , false
					"preload_small_native_ads"=>"true",    // true , false
					"preload_small_native_banner_ads"=>"true",    // true , false
					"preload_banner_ads"=>"true",                // true , false
					
					"dev_option"=>"false",    // true , false
					"vpn_option"=>"true",    // true , false
					
					"inter_count"=>"2",
					
					"ad_splash"=>"adx",                 // native , inter , admob , adx , applovin , off     
					"ad_secound_splash"=>"off",         // inter , admob , adx , applovin , off              
					"ad_appopen"=>"adx",              // native , inter , admob , adx , off   
					"ad_inter_type"=>"inter",       	// appopen , inter	  
					"ad_open_inter"=>"adx",      // admob , adx , applovin , local 
					"ad_inter"=>"adx",       		  
					"ad_small_native_banner"=>"adx",   
					"ad_small_native"=>"adx",         
					"ad_native_type"=>"native",           // mrec , native
					"ad_native"=>"adx",             
					"ad_banner"=>"adx",            
					"ad_medium_rect"=>"adx",
					
					"qureka_inter"=>"off",            
					"qureka_url"=>"https://1154.game.qureka.com", 
					
					"live_mode"=>"off",  
					"teamURL"=>"http://cricnet.co.in/ManagePlaying/TeamImages/",	
					"baseURL"=>"http://lotus.cricketfeed.co.in/api/values/",
					"imageURL"=>"http://cricnet.co.in/ManagePlaying/PlayerImage/", 
																			
					"local_ad_url"=>"https://uniqstarinfotech.com/Local_Ads/get_local_apps.json",					
						
					"privacy_url"=>"https://sites.google.com/view/cricsmart-cricket-live-line/privacy-policy",
														
					"redirect_app"=>""    
					
					));

					if(empty($data))
					{
						$data=array("success"=>0, "message"=>"there is no data found...!!");
					}else
					{
						$data = array( "success"=>1, "data"=>$data);	
					}
				}
				
				
		
		
			}
		else {
  $data=array("success"=>0, "message"=>"package name required...!!");
}
header ( 'Content-type: application/json' );
echo json_encode($data);
?>