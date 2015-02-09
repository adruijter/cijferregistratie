<?php
    
    if (isset($_GET['url']))
    {
        $url = $_GET['url'];
    }
    else
    {
        $url = "homePage";
    }
?>
<h3>Index</h3>
Dit is wat er is meegegeven als GET variabel met de url:
<?php echo $url; ?>