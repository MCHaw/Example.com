<?php
require '../core/processContactform.php';
$meta = [];
$meta['title']='My Website';
$meta['description']= 'About Marcus';

$content = <<<EOT
{$message}
    <body>
    
            <p>
               <h1>Thanks</h1>
               Thanks for contacting me.  I'll be in touch shortly. 
    </p>
</Main>
<script>

    var toggleMenu = document.getElementById('toggleMenu');
    var nav = document.querySelector('nav');
    toggleMenu.addEventListener(
      'click',
      function(){
        if(nav.style.display=='block'){
          nav.style.display='none';
        }else{
          nav.style.display='block';
        }
      }
    );
  </script>
    </body>
</html>
EOT;

require '../core/layout.php';