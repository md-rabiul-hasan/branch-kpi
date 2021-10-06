///  Hide Branch Compare Job Volume Section 
$('#compareBranchJobVolume').hide();

///     When Page Loaded Compleate Then called this method
$(document).ready(function() {
    casaOpenTermDepositOpen();
});




///   CASA Open/Term Deposit Open
function casaOpenTermDepositOpen(event) {

    $('#casaOpenTermDepositOpenLoader').show();
    $('#casaOpenTermDepositOpenData').hide();
    $('#casaOpenTermDepositOpenDataNotFound').hide();

    $.ajax({
        url: "ajax/branch/dashboard/mintomax-single-region-branch.php",
        method: "post",
        success: function(data) {
            console.log(data);
            //loader hide 
            $('#casaOpenTermDepositOpenLoader').hide();

            if (data == 0) {
                $('#casaOpenTermDepositOpenData').hide();
                $('#casaOpenTermDepositOpenDataNotFound').fadeIn(1000);
                $('#casaOpenTermDepositOpenDataNotFound').html('<div class="text-center font-weight-bold">Data Not Found :)</div>');
            } else {
                $('#casaOpenTermDepositOpenDataNotFound').hide();
                $('#casaOpenTermDepositOpenData').fadeIn(1000);

                var backgroundColor = [];
                var branch_name     = [];
                var cash_deposite   = [];
                var withdrawal      = [];
                var fundtransfer    = [];
                var remitance       = [];

                for (var i in data) {
                    cash_deposite.push(data[i].cash_deposite);
                    withdrawal.push(data[i].withdrawal);
                    fundtransfer.push(data[i].fundtransfer);
                    remitance.push(data[i].remitance);
                    branch_name.push(data[i].branch_name);
                }



                var casaOpenTermDepositOpen = document.getElementById('casaOpenTermDepositOpen').getContext('2d');

                var chart = new Chart(casaOpenTermDepositOpen, {
                    events: ['click'],
                    type: 'horizontalBar',
                    data: {
                        labels: branch_name,
                        datasets: [{
                                label: "CASA",
                                data: cash_deposite,
                                backgroundColor: '#549E39'
                            },
                            {
                                label: "Deposit",
                                data: withdrawal,
                                backgroundColor: '#8AB833'
                            },
                            {
                                label: "Remittance",
                                data: fundtransfer,
                                backgroundColor: '#C0CF3A'
                            },
                            {
                                label: "Loan",
                                data: remitance,
                                backgroundColor: '#029676'
                            },
                        ]
                    },
                    options: {
                        events: ['click'],
                        responsive: false,
                        legend: {
                            position: 'bottom', // place legend on the bottom side of chart

                        },
                        scales: {
                            xAxes: [{
                                stacked: true, // this should be set to make the bars stacked
                                ticks: {
                                    fontSize: 14,
                                    fontColor: "#000"
                                }
                            }],
                            yAxes: [{
                                stacked: true, // this also..
                                ticks: {
                                    fontSize: 14,
                                    fontColor: "#000"
                                }
                            }]
                        }                        
                    }
                });
            }
        }
    });
}


