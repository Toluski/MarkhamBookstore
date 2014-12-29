<?php
      echo"<div id='wrap'>";
      echo "<table width=780px border=0px >";
                  echo "<tr>";
                  echo "<td style='color:red;'>";
                  if (isset($_SESSION['username']))
					{
					echo "<b>&nbsp;&nbsp;&nbsp;Welcome: " . $_SESSION['username']. "!</b>";
					}
					else{
						echo "<script>
                    		document.getElementById('wrap').style.display = 'none';
               			 	</script>";
					}
                  echo "</td>";
                  echo"<td align='right'>";
                  echo "<form method='POST' name='sessionform' action='logout.php'>";
                  echo "<input type='submit' name='submit' value='logout'>";
                  echo "</form>";
                  echo "</td>";
                  echo "</tr>";
                  echo "</table>";
				  echo "</div>";
?>
