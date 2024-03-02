<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/Users/sanjeevprasanna/yt/yt.css">
    </head>
    <body>
        <header>
           
            <div class="header">
                <div class="h1">Y🎃O🎃t🎃u🎃b🎃e🎃</div>
                <div class="h2">
                    <form src="php.php" method="post">
                    <input for="search" name="var" id="search" placeholder="Search">
                    <script>
                        function def(){
                            ap=document.getElementById("search").value;
                            alert("The search result for "+ap+" will be updated once the backend is constructed 🙉");
                        }
                    </script>
                    <button class="ok" onclick="def()">OK</button></div>
                    <div class="h3"><img class="img" src="/Users/sanjeevprasanna/Downloads/IMG_20230923_205120-2.jpg">
                    </form>
                    <?php
                        $var=$_POST["var"];
                        echo $var;
                    ?>
                    <!--  <button id="bttn" for="bttn"onclick="bttni(body)" >Dark mode</button>
                    <script>
                        function bttni(body){
                            body.style.backgroundColor="black";
                            body.style.color="white";
                        }
                    </script> -->
                    <button id="btttn" for="btttn"onclick="btttni()" >want Dark mode??</button>
                    <script>
                        function btttni(){
                            document.body.classList.toggle("darktheme");
                            if(document.body.classList.contains("darktheme")){
                                document.getElementById("btttn").textContent="want Light Mode??";
                            }else{
                                document.getElementById("btttn").textContent="want Dark Mode??";
                            }
                           
                        }
                    </script></div>
            </div>
        </header>
        <div class="gflex">
        <div class="gof">
            <div class="f1"><button>home</button></div>
            <div class="f2"><button>subscription</button></div>
            <div class="f3"><button>explore</button></div>
            <div class="f4"><button>recent</button></div>
            <div class="f5"><button>history</button></div>
            <div class="f6"><button>Accounts</button></div>
        </div>
        <div class="grid"><div class="v1">
            <div><img src="/Users/sanjeevprasanna/Downloads/andre-benz-qJfznuTMAYA-unsplash.jpg" height="200px"></div>
            <div class="vid1"><img src="/Users/sanjeevprasanna/Downloads/andre-benz-qJfznuTMAYA-unsplash.jpg" class="v1img" height="40px" width="40px"><div class="vid11"><div class="tit1">the video title to be given by the channel owner</div><div class="ch1">Channel Name</div></div></div></div>
            <div><img src="/Users/sanjeevprasanna/Downloads/andre-benz-qJfznuTMAYA-unsplash.jpg" height="200px"><p>videeo title</p></div>
            <div><img src="/Users/sanjeevprasanna/Downloads/andre-benz-qJfznuTMAYA-unsplash.jpg" height="200px"><p>videeo title</p></div>
            <div><img src="/Users/sanjeevprasanna/Downloads/andre-benz-qJfznuTMAYA-unsplash.jpg" height="200px"><p>videeo title</p></div>
            <div><img src="/Users/sanjeevprasanna/Downloads/andre-benz-qJfznuTMAYA-unsplash.jpg" height="200px"><p>videeo title</p></div>
            <div><img src="/Users/sanjeevprasanna/Downloads/andre-benz-qJfznuTMAYA-unsplash.jpg" height="200px"><p>videeo title</p></div>
            <div><img src="/Users/sanjeevprasanna/Downloads/andre-benz-qJfznuTMAYA-unsplash.jpg" height="200px"><p>videeo title</p></div>
            <div><img src="/Users/sanjeevprasanna/Downloads/andre-benz-qJfznuTMAYA-unsplash.jpg" height="200px"><p>videeo title</p></div>
            <div><img src="/Users/sanjeevprasanna/Downloads/andre-benz-qJfznuTMAYA-unsplash.jpg" height="200px"><p>videeo title</p></div>
            <div><img src="/Users/sanjeevprasanna/Downloads/andre-benz-qJfznuTMAYA-unsplash.jpg" height="200px"><p>videeo title</p></div>
            <div><img src="/Users/sanjeevprasanna/Downloads/andre-benz-qJfznuTMAYA-unsplash.jpg" height="200px"><p>videeo title</p></div>
            <div><img src="/Users/sanjeevprasanna/Downloads/andre-benz-qJfznuTMAYA-unsplash.jpg" height="200px"><p>videeo title</p></div>
            </div>
        </div>
    </div>
    <!-- <input type="checkbox" id="btn" />
   <label for="btn">Click here</label> -->
    </body>
</html>