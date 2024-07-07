<?php
include("./includes/header.php");
include("./includes/navbar.php");

?>

<div class="container">
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
<div class="col-12">
      <h2 class="text-uppercase site-section-heading text-uppercase text-center font-secondary mt-5">Agent Commission </h2></div>
    <div class="row">
        <div class="col-xl-6">
            <label style="font-weight: bolder; margin-top: 20px;">Enter Premium</label><input type="number" name="premium" id="premium" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="Enter premium ">
        </div>
        <div class="col-xl-6">
            <label style="font-weight: bolder;margin-top: 20px; ">Enter Insurance Year</label><input type="number" name="insurence year" id="insurence_year" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="Enter insurence year ">
        </div>
    </div>
    <div class="row mt-3 mb-2" style="margin-left: -4px;">
        <input type="submit" onclick="return insurence();" class="addbtn form-control  border border-primary border-1" style="background-color:blue; color:white; height: 37px; width:150px" type="submit"></input>
        </div>
    </from>





<script>
    function insurence() {

        let ins = $("#insurence_year").val();
        let premium = $("#premium").val();
        let total = null;
        $("#table").html("<thead style='color:black;'><tr><th>Number Of Year </th><th>Commision</th></tr></thead>");
        let i = 1;
        let total_insurence_of_commision = null;
        while (i <= ins) {
            if (i == 1) {
                total = ((premium * 35) / 100);
                $("#table").append('<tr><td style="font-weight:bold">' + i + "   Year Commision  " + '</td><td style="font-weight:bold">' + " Rs." + total + '</td></tr>');
            } else if (i == 2 || i == 3) {
                total = ((premium * 7.5) / 100);
                $("#table").append('<tr><td style="font-weight:bold">' + i + "   Year Commision" + '</td><td style="font-weight:bold">' + " Rs." + total + '</td></tr>');

            } else {
                total = ((premium * 5) / 100);
                $("#table").append('<tr><td style="font-weight:bold">' + i + "  Year Commision" + '</td><td style="font-weight:bold">' + " Rs." + total + '</td></tr>');

            }
            i++;
            total_insurence_of_commision = total + total_insurence_of_commision;

        }
        $("#table").append('<tr><th  style=" color:red;">Total Insurence Of Commision</th><th  style=" color:red;"> Rs.' + total_insurence_of_commision + '</th></tr>');

        // $("#table").append('<tfooter style="background-color:yellow; color:black;"><tr></tr></tfooter>');


        return false;
    }
</script>
<div class="table-responsive mt-2" >
    <!-- <table class="table table-info table-hover" id="table" align="center" style="margin-top: 10px; border: 10px;"> -->
    <table border="2" class="table table-bordered" id="table" align="center" >

    </table>
</div>
</div>


<?php
include("./includes/script.php");
include("./includes/footer.php");

?>