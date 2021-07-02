	<?php
function move_file($sourceFile,$destPath,$destName)
							 {	
								 if(! (is_dir($destPath)))
								mkdir($destPath);
								$dhc=date("dmy_His",time());
								$destName='photos/'.$dhc."_".$destName;
								if(move_uploaded_file($sourceFile,$destName))
								{
									return $destName;
								}
							return false;
							 }
							 
			function valid_extension($file_name, $ext_ok) //pour valider ou non l'extension du fichier
							{			
	                        	$file_ext = strtolower( substr(strrchr($file_name, '.') ,1) );
	                        	foreach($ext_ok as $k=>$ext)
			                                 $ext_ok[$k]=strtolower($ext_ok[$k]);
		                         if( in_array($file_ext, $ext_ok) ) 
			                                 return true;
	                             return false;
	                       }ffffkk
?>