<?php

$meta = [];
$meta['title']='Marcus Hawthorne';
$meta['description']= 'About Marcus';

$content = <<<EOT

          <main>
              
                  <p>
                    <img 
                        class="avitar"
                        src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm&s=64" alt="My Avatar">
                Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!Hello my name is Marcus. I like the codes.  The codes are great!

    </p>
    </main>
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
EOT;

require '../core/layout.php';
