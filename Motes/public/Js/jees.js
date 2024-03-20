function hitam(){
    document.getElementById("icon1").style.opacity = "100%";
}
function hitam2(){
    document.getElementById("icon2").style.opacity = "100%";
}
function awal(){
    document.getElementById("icon1").style.opacity = "30%";
}
function awal2(){
    document.getElementById("icon2").style.opacity = "30%";
}

window.onload= function muncul(){
    var ctx = document.getElementById("inicanvas").getContext("2d");
                       // tampilan chart
                       var myDoughnutChart  = new Chart(ctx,{
                           type: 'doughnut',data : {
                                // label nama setiap Value
                                labels:[
                                            'Health',
                                            'Bills',
                                            'Education',
                                            'Entertainment',
                                            'Investation'
                                    ],
                                datasets: [{
                                    // Jumlah Value yang ditampilkan
                                    data:[100,60,20,50,10],
                            
                                    backgroundColor:[
                                            '#FD7C78',
                                            '#70DAFC',
                                            '#FED085',
                                            '#B9E88B',
                                            '#82A5FC'
                                            ]
                                }],
                            },
                            options: {
                                tooltips: {
                                backgroundColor: "rgb(255,255,255)",
                                bodyFontColor: "#858796",
                                borderColor: '#dddfeb',
                                borderWidth: 1,
                                xPadding: 15,
                                yPadding: 15,
                                displayColors: false,
                                caretPadding: 10,
                                },
                                cutoutPercentage: 70,
                            }
                        });
}


// dynamic script tabel
// $(document).ready(function(){

//     //Счиаем наши загаловки
//     var head_col_count =  $('table thead tr td').size();
//     //Считаем наши th элементы в таблице
//     for ( j=0; j <= head_col_count; j++ )  {
//         // Работа с текстом
//         var head_col_label = $(' table thead td:nth-child('+ j +')').text();
//         //Каждому td присваиваем data-title, который потом выводим через css
//         $('table tr td:nth-child('+ j +')').replaceWith(
//             function(){
//             return $('<td data-title="'+ head_col_label +'">').append($(this).contents());
//             }
//         );
//     }
// });
