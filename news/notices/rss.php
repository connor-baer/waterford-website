<?php include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php 
    $domain = 'http://'.$_SERVER['HTTP_HOST'];
    PerchSystem::set_var('domain', $domain);

    header('Content-Type: application/rss+xml');

    echo '<'.'?xml version="1.0"?'.'>'; 
?>

<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title>Latest school notices from Waterford Kamhlaba UWCSA</title>
        <link><?php echo PerchUtil::html($domain); ?>/news/notices/</link>
        <description>Waterford Kamhlaba UWCSA is a remarkable and pioneering secondary school located in Mbabane, Swaziland.</description>
        <atom:link href="<?php echo PerchUtil::html($domain); ?>/news/notices/rss.php" rel="self" type="application/rss+xml" />
        <?php
            perch_blog_custom(array(
                'template'=>'rss_post.html',
                'count'=>20,
                'section' => 'school-notices',
                'sort'=>'postDateTime',
                'sort-order'=>'DESC'
                ));
        ?>
    </channel>
</rss>