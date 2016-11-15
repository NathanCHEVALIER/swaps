<?php
	
	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $email))
	{
		$passage_ligne = "\r\n";
	}
	else
	{
		$passage_ligne = "\n";
	}
	//=====Déclaration des messages au format texte et au format HTML.
	$message_txt = "Bonjour, et merci pour votre inscription sur Swaps ! Pour Rappel, vos informations sont les suivantes: Pseudo: '.$pseudo.' 
	Mot de passe: '.$password.' Pour activer votre compte, veuillez copiez-coller l\'URL: http://swaps-online/activation/'.$id.'-'.$cle.'/  
	Ce mail s'affiche anormalement à cause de votre messagerie mail obsolète! ";
	$message_html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
					   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
					<html xlmns:v="urn:schemas-microsoft-com:vml" >
						<head>
							<meta http-equiv="content-type" content="text/html; charset=utf-8" />
							<meta name="viewport" content="width=device-width; initial-scape=1.0; maximum-scale=1.0;" />
							<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
						</head>

						<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
							<table bgcolor="#FFFFFF" width="100%" border="0" cellpadding="0" cellspacing="0" >
								<tbody>
								<!-- Header -->
									<tr>
										<td valign="top" bgcolor="#AF0000">
											<table bgcolor="#AF0000" align="center" width="50%" border="0" cellpadding="0" cellspacing="0" >
											    <tbody>
													<tr>
												 		<td height="15" style="font-size: 15px; line-height: 15px;">
												 			&nbsp;
												    	</td>
												    </tr>
												    <tr>
												    	<td style="text-align: center;">
												    		<a href="http://swaps.esy.es">
												    			<img src="http://swaps.esy.es/ressources/images/logo_swaps_blanc.png" height="80px" border="0" alt="Logo de Swaps" />
												    		</a>
												    	</td>
												    </tr>
												    <tr>
												    	<td height="15" style="font-size: 15px; line-height: 15px;">
															&nbsp;
												    	</td>
												    </tr>
												    <tr>
												    	<td align="center" style="text-align: center; font-size: 24px; color: #FFFFFF; font-family: \'Ubuntu\', sans-serif;">
															Bienvenue sur Swaps
												    	</td>
												    </tr>
												    <tr>
												    	<td height="15" style="font-size: 15px; line-height: 15px;">
															&nbsp;
												    	</td>
												    </tr>
											    </tbody>
											</table>
										</td>
									</tr>
									<!-- Fin header-->
									<!-- body -->
									<tr>
										<td valign="top" bgcolor="#FFFFFF">
											<table bgcolor="#FFFFFF" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" >
											    <tbody>
													<tr>
														<td height="30" style="font-size: 30px; line-height: 30px;">
															&nbsp;
												    	</td>
													</tr>
													<tr>
														<table align="center" width="80%" border="0" cellpadding="0" cellspacing="0" >
												    		<tbody>
												    			<tr>
												    				<td align="center" style="text-align: center; font-size: 20px; color: #AF0000; font-family: \'Ubuntu\', sans-serif;">
												    					Veuillez valider votre compte
												    				</td>
												    			</tr>
												    			<tr>
																	<td height="30" style="font-size: 30px; line-height: 30px;">
																		&nbsp;
															    	</td>
																</tr>
																<tr>
																	<td align="center" style="text-align: center; font-size: 14px; color: #444444; font-family: sans-serif;">
																		Bonjour, et merci pour votre inscription sur Swaps !<br /><br />
																	</td>
																</tr>
																<tr>
																	<td align="center" style="text-align: center; font-size: 14px; color: #444444; font-family: sans-serif;">	
																		Pour Rappel, vos informations sont les suivantes:<br /><br />

																			Pseudo: '.$pseudo.'<br />
																			Mot de passe: '.$password.'<br /><br /><br />
																							
																		Pour activer votre compte, veuillez cliquer sur le Bouton ci dessous <br /><br />
																	</td>
																</tr>
																<tr>
																	<td height="10" style="font-size: 10px; line-height: 10px;">
																		&nbsp;
															    	</td>
																</tr>
																<tr>
																	<td>
																		<table bgcolor="#FFFFFF" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" >
											   								<tbody>
											   									<tr>
											   										<td>
											   											&nbsp;
											   										</td>
																						<td bgcolor="#AF0000" width="300" height="40" align="center" style="text-align: center; font-size: 20px; color: #FFFFFF; font-family: \'Ubuntu\', sans-serif;">
																							<a href="http://swaps.esy.es/activation/'.$id.'-'.$cle.'/" style="text-align: center; font-size: 20px; color: #FFFFFF; font-family: \'Ubuntu\', sans-serif;" >
																								Validez votre compte
																							</a>
																						</td>
																					<td>
																						&nbsp;
																					</td>
																				</tr>
											   								</tbody>
											   							</table>
															    	</td>
																</tr>
																<tr>
																	<td height="60" style="font-size: 60px; line-height: 60px;">
																		&nbsp;
															    	</td>
																</tr>
																<tr>
																	<td align="center" style="text-align: center; font-size: 14px; color: #444444; font-family: sans-serif;">
																		Si le lien ne fonctionne pas, copiez-coller l\'URL ci-dessous<br />
																		http://swaps.esy.es/activation/'.$id.'-'.$cle.'/<br />
																	</td>
																</tr>
																<tr>
																	<td height="60" style="font-size: 60px; line-height: 60px;">
																		&nbsp;
															    	</td>
																</tr>
																<tr>
																	<td>
																		<table bgcolor="#FFFFFF" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" >
											   								<tbody>
																			   <tr align="center" style="text-align: center;">
																					<td style="text-align: center; width: 45%; margin-top: 10px; margin-right: 5%; font-size: 14px; font-family: sans-serif;">
																						<img src="swaps.esy.es/ressources/images/network.png" >
																						<h2  style="text-align: center; font-size: 20px; color: #AF0000; font-family: \'Ubuntu\', sans-serif;">
																							Il faut savoir semer pour récolter
																						<h2><br /><br />
																						<p style="text-align: center; font-size: 13px; color: #444444; font-family: sans-serif;">
																							Un réseau exige des relations de réciprocité. Il est bâti sur l’échange, la confiance, l’estime pour les compétences et les spécificités de chacun.
																							Il ne fonctionne que si chaque membre peut donner un jour à autrui autant ou plus que ce qu’il a lui-même reçu.<br /><br />
																							Vous aussi, mettez vos compétences et vos connaissances au service des autres utilisateurs. 
																							Le temps que vous aurez investi vous sera largement remboursé!
																						</p>
																					</td>
																					<td style="text-align: center; width: 45%; margin-left: 4%; font-size: 12px; font-family: sans-serif;">
																						<img src="swaps.esy.es/ressources/images/data_privacy.png" >
																						<h2  style="text-align: center; font-size: 20px; color: #AF0000; font-family: \'Ubuntu\', sans-serif;">
																							Vos données vous appartiennent
																						<h2><br /><br />
																						<p style="text-align: center; font-size: 13px; color: #444444; font-family: sans-serif;">
																							Internet est un formidable outil de partage à l’échelle mondiale. Cependant, son utilisation amène trop 
																							souvent à la violation de droits fondamentaux tels que votre vie privée.<br /><br />
																							Chez Swaps nous voulons que votre vie privée, notamment vos données vous appartiennent. 
																							Nous nous engageons à vous donner les pleins pouvoirs sur leur gestion, à ne jamais les analyser
																							ou encore à les échanger à d\'autres organismes.
																						</p>
																					</td>
																				</tr>
											   								</tbody>
											   							</table>
															    	</td>
																</tr>
																<tr>
																	<td align="center" height="20" style="font-size: 20px; line-height: 20px; text-align: center; font-size: 14px; color: #AAAAAA; font-family: sans-serif;">
																		------------------------------------
															    	</td>
																</tr>
																<tr>
																	<td height="20" style="font-size: 20px; line-height: 20px;">
																		&nbsp;
															    	</td>
																</tr>
																<tr>
																	<td align="center" style="text-align: center; font-size: 14px; color: #777777; font-family: sans-serif;">
																
																		Toute L\'équipe Swaps vous souhaite la meilleure expérience possible sur Swaps-online !<br /><br />

																		Si vous n\'arrivez pas valider votre compte, <a href="">voir ici</a><br />

																		Si vous n\'avez pa entamer de procédure d\'inscription sur Swaps, <a href="">voir ici</a><br /><br />
																								 
																		Ceci est un mail automatique, Merci de ne pas y répondre.<br />

																		Pour toute question, veuillez contacter contact@swaps.esy.es
																	</td>
																</tr>
																<tr>
																	<td height="20" style="font-size: 20px; line-height: 20px;">
																		&nbsp;
															    	</td>
																</tr>
												    		</tbody>
											    		</table>
													</tr>
											    </tbody>
											</table>
										</td>
									</tr>
									<!--Fin body -->
								</tbody>
							</table>
						</body>
					</html>';
	
	$boundary = "-----=".md5(rand());

	$header = "From: \"Inscription Swaps\"<contact@swaps.esy.es>".$passage_ligne;
	$header.= "Reply-to: \"Inscription Swaps\"<contact@swaps.esy.es>".$passage_ligne;
	$header.= "MIME-Version: 1.0".$passage_ligne;
	$header .= "X-Priority: 3".$passage_ligne;
	$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
	
	$sujet = "Validez votre inscription Swaps";

	$message = $passage_ligne."--".$boundary.$passage_ligne;
	$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
	$message.= $passage_ligne.$message_txt.$passage_ligne;
	
	$message.= $passage_ligne."--".$boundary.$passage_ligne;
	$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
	$message.= $passage_ligne.$message_html.$passage_ligne;

	$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
	$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

	mail($email,$sujet,$message,$header);

?>				