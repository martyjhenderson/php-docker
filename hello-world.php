<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; 
 $options = [
    'cost' => 9,
];
echo password_hash("pants", PASSWORD_ARGON2I, $options);
 ?> 
 </body>
</html>