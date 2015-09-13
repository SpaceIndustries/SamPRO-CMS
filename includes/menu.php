    <!-- Menu du haut -->
        <!-- Menu Dropdown -->
        <ul id="dropdown1" class="dropdown-content">
                  <li>Serveur(s) SA-MP</li>
                  <li><a href="samp://<?php echo $ipsamp; ?>:<?php echo $portsamp; ?>"><img src="images/social/social_samp.png" /> <?php echo $serveurname; ?></a></li>
                  <li class="divider"></li>
                  <li>Serveur(s) VoIP</li>
                  <li><a href="ts3server://<?php echo $ipteamspeak3; ?>?port=<?php echo $portteamspeak3; ?>"><img src="images/social/social_teamspeak.png" /> TeamSpeak 3</a></li>
         </ul>
        <!-- END Dropdown -->
         <!-- Menu Dropdown -->
        <ul id="dropdown2" class="dropdown-content">
           <li>SA-MP</li>
           <li><a href="https://sa-mp.com/download.php" target="_blank"><img src="images/social/social_samp.png" /> SA-MP 0.3.7</a></li>
           <li><a href="/forum/modding/"><img src="images/social/social_samp.png" /> Pack de Texture</a></li>
           <li class="divider"></li>
            <li>VoIP</li>
            <li><a href="https://teamspeak.com/downloads" target="_blank"><img src="images/social/social_teamspeak.png" /> TeamSpeak 3</a></li>
         </ul>
        <!-- END Dropdown -->
   <nav class="grey darken-4">
    <div class="nav-wrapper">
    <ul id="nav-mobile" class="left hide-on-med-and-down">
        <?php
        if($status == "online virtual"){
           echo "<li><a title ='Serveur Eteint ✖'>TS3 (" . $count . "/" . $max . ") : <span style='color:#aa0000' class='fa fa-times'></span></a></li>";
        }else{
          echo "<li><a title ='Serveur Allumer ✔'>TS3 (" . $count . "/" . $max . ") : <span style='color:green' class='fa fa-signal'></span></a></li>";
        }
        ?>
      </ul>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="map.php">Carte du serveur</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Connexion Serveur(s)</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Telechargements</a></li>
      </ul>
    </div>
  </nav><br>