<?php
$cakeDescription = __d('cake_dev', 'FaultReportApplication');
?>
<html>
    
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $title_for_layout; ?>
        </title>

        <?php
        echo $this->Html->meta('icon');
       // echo $this->Html->css('cake.generic');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>

        <div id="container">

            <div id="content">
                <div  style="text-align: right;">
                    <?php if ($logged_in): ?>
                        Welcome <?php echo $current_user['username']; ?>. <?php echo $this->Html->link('logout', array('controller' => 'users', 'action' => 'logout')); ?>                         
                    <?php else: ?>
                        You are not logged in. <?php echo $this->Html->link('login', array('controller' => 'users', 'action' => 'login')); ?>                                
                    <?php endif; ?>
                </div>


                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>
<!--
                <div id="sidebar">
                    <ul>

                        <li>
                            <h1>Your destination?</h1>
                            <ul> 

                                <li><a href="http://localhost/Fault/reports/">Reports</a></li>
                                <li><a href="http://localhost/Fault/users/">Users</a></li>
                                <li><a href="http://localhost/Fault/categories/">Categories</a></li>
                                <li><a href="http://localhost/Fault/">Home</a></li>

                            </ul>
                        </li>					

                    </ul>
                </div>
            </div> 
-->
        </div>


        <div id="footer">
            <p>&copy;2013 All Rights Reserved &nbsp;&bull;&nbsp; Design by Chathura Gamage </p>
        </div>
    </body>
</html>
