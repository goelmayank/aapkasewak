<div id="templatemo_header_wrapper">
	<div id="templatemo_header">

    <div id="site_title">
      <a href="#"><strong>Aapka Sewak</strong>
      </a>
    </div>

  </div>


</div>


<div id='cssmenu'>
  <?php
  $sql ="select * from navigation where parentname='0' and deleteflag='n'";
  $result=mysql_query($sql);
  $i=0;
  while($row=mysql_fetch_array($result))
  {
    $i++;
    ?>
    <ul>
     <li><a href="<?php echo $row['link'];?>"><span><?php echo $row['menuname'];?></span></a>
       <?php 
       $sql ="select * from navigation where parentname='$i' and deleteflag='n'";
       $result=mysql_query($sql);
       while($row=mysql_fetch_array($result))
       {
        ?>
        <ul>
          <li><a href="<?php echo $row['link'];?>"><span><?php echo $row['menuname'];?></span></a>
          </li>
        </ul>
        <?php 
      }
      ?>
    </li>
  </ul>
  <?php 
}
?>
</div>
