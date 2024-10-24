<section class="relative h-screen w-full flex flex-col justify-center items-center">
        <!-- Layer 1: Background -->
        <div class="absolute top-0 left-0 h-full w-full bg-[url('./assets/images/bg4.png')] bg-cover bg-center z-10"></div>
        
        <!-- Layer 2: Navigation on top -->
        <div class="relative flex flex-col justify-start items-center w-full z-20 h-full pt-16">
            <?php include('./includes/nav.php');?>
            <div class="w-full flex flex-col items-center justify-center px-72 ">
                <p class="text-[180px] text-white league-gothic- tracking-wider w-full text-center" style="text-shadow: 2px 4px 10px rgba(0, 0, 0, 0.25), 4px 8px 20px rgba(0, 0, 0, 0.15);">WELCOME TO JAAN</p>
                <div class="flex w-full justify-center items-center space-x-16 pl-24">
                    <div class="text-[40px] space-y-4 text-right text-white" style="text-shadow: 2px 4px 10px rgba(0, 0, 0, 0.25), 4px 8px 20px rgba(0, 0, 0, 0.15); ">
                        <p class="">We think, We build or We fund</p>
                        <p>A Digital Venture Company</p>
                    </div>
                    <div class="w-1/3 flex flex-col justify-start items-start space-y-16 orbitron-">
                        <a href="#" class="bg-transparent border-2 border-white text-white text-3xl h-20 flex justify-center items-center w-[340px]">EXPLORE US</a>
                        <a href="#" class="bg-black text-white h-20 flex justify-center items-center w-[340px] text-3xl">POWER YOUR IDEA</a>
                    </div>
                </div>
        </div>
        <?php include('./includes/nav_in.php');?>
        </div>

    </section>