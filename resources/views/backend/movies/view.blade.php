@extends('layouts.app')
@include('layouts.navigation')
@include('layouts.leftsidebar')
@section('main')
<div class="content">
    <div class="box_wrapper">
        <div class="box_body">
            <div class="movie_card" id="tomb">
                <div class="info_section">
                    <iframe width="320" height="240"
                            src="{{$movies->movie_url}}"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                    </iframe>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection

<script type="text/javascript">
    var seats=document.getElementsByTagName("td");  
    console.log(seats);
    function clicked(e)
    {

            console.log("click");
            e.style.background="grey";
            
    }
    for(var i=0;i<seats.length;i++)
    {
        seats[i].addEventListener("click",clicked);
    }
    
</script>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,700,800');


    /* seat style */


    ul.seat_w3ls {
        margin: 2em 0;      
    }
    
    .screen {
        width: 100%;
        background: #ff9800;
        margin: 2em 0;
    }
    
    h2.wthree {
        padding: 0.8em;
        font-size: 1.2em;
        color: #000;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 7px;
        word-spacing: 10px;
    }
    
    .smallBox::before {
        content: "";
        width: 15px;
        height: 15px;
        display: inline-block;
        margin-right: 10px;
    }
    
    .greenBox::before {
        content: "";
        background: Green;
    }
    
    .redBox::before {
        content: "";
        background: Red;
    }
    
    .emptyBox::before {
        content: "";
        box-shadow: inset 0px 2px 3px 0px rgb(255, 152, 0), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        -moz-box-shadow: inset 0px 2px 3px 0px rgb(255, 152, 0), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        -webkit-box-shadow: inset 0px 2px 3px 0px rgb(255, 152, 0), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        background-color: #fff;
    }
    
    .seats {
        border: 1px solid red;
        background: yellow;
    }
    
    .seatGap {
        width: 40px;
    }
    
    .seatVGap {
        height: 40px;
    }
    
    table {
        text-align: center;
    }
    
    .Displaytable {
        text-align: center;
    }
    
    .Displaytable td,
    .Displaytable th {
        width: 100%;
        padding: 7px 10px;
        color: #000;
        font-weight: 600;
    }
    
    table.Displaytable tr {
        background: #fff;
        color: #fff;
    }
    
    textarea {
        border: none;
        background: transparent;
        resize: none;
    }
    
    input[type=checkbox] {
        width: 13px;
        margin-right: 14px;
        cursor: pointer;
    }
              table{
                   margin: 10px;
              }
              td{
                   margin: 10px;
                   border: 2px solid black;
                   padding: 5px;
              }
              .section{
                   margin: 20px;
                   padding-bottom: 50px;
              }
              .screen{
                   border: 3px solid black;
                   width: 300px;
                   text-align: center;
                   margin-left: 100px ;
              }
              td:hover{
                   background-color: gray;
              }
              input[type=checkbox]:before {
        content: "";
        width: 25px;
        height: 18px;
        border-radius: 5px;
        /* Safari 3-4, iOS 1-3.2, Android 1.6- */
        -webkit-border-radius: 5px;
        /* Firefox 1-3.6 */
        -moz-border-radius: 5px;
        display: inline-block;
        vertical-align: middle;
        text-align: center;
        border: 3px solid #ff9800;
        box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        -moz-box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        -webkit-box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        background-color: #ffffff;
    }
    
    input[type=checkbox]:checked:before {
        background-color: Green;
        font-size: 15px;
    }

    /* end */
    * {
        box-sizing: border-box;
        margin: 0;
    }

    html,
    body {
        margin: 0;
        background: white;
        font-family: 'Montserrat', helvetica, arial, sans-serif;
        font-size: 14px;
        font-weight: 400;
    }

    .link {
        display: block;
        text-align: center;
        color: #777;
        text-decoration: none;
        padding: 10px;
    }

    .movie_card {
        position: relative;
        display: block;
        width: 800px;
        height: 350px;
        margin: 80px auto;
        overflow: hidden;
        border-radius: 10px;
        transition: all 0.4s;
        box-shadow: 0px 0px 120px -25px rgba(0, 0, 0, 0.5);

        &:hover {
            transform: scale(1.02);
            box-shadow: 0px 0px 80px -25px rgba(0, 0, 0, 0.5);
            transition: all 0.4s;
        }

        .info_section {
            position: relative;
            width: 100%;
            height: 100%;
            background-blend-mode: multiply;
            z-index: 2;
            border-radius: 10px;

            .movie_header {
                position: relative;
                padding: 25px;
                height: 40%;

                h1 {
                    color: black;
                    font-weight: 400;
                }

                h4 {
                    color: #555;
                    font-weight: 400;
                }

                .minutes {
                    display: inline-block;
                    margin-top: 15px;
                    color: #555;
                    padding: 5px;
                    border-radius: 5px;
                    border: 1px solid rgba(0, 0, 0, 0.05);
                }

                .type {
                    display: inline-block;
                    color: #959595;
                    margin-left: 10px;
                }

                .locandina {
                    position: relative;
                    float: left;
                    margin-right: 20px;
                    height: 120px;
                    box-shadow: 0 0 20px -10px rgba(0, 0, 0, 0.5);
                }
            }

            .movie_desc {
                padding: 25px;
                height: 50%;

                .text {
                    color: #545454;
                }
            }

            .movie_social {
                height: 10%;
                padding-left: 15px;
                padding-bottom: 20px;

                ul {
                    list-style: none;
                    padding: 0;

                    li {
                        display: inline-block;
                        color: rgba(0, 0, 0, 0.3);
                        transition: color 0.3s;
                        transition-delay: 0.15s;
                        margin: 0 10px;

                        &:hover {
                            transition: color 0.3s;
                            color: rgba(0, 0, 0, 0.7);
                        }

                        i {
                            font-size: 19px;
                            cursor: pointer;
                        }
                    }
                }
            }
        }

        .blur_back {
            position: absolute;
            top: 0;
            z-index: 1;
            height: 100%;
            right: 0;
            background-size: cover;
            border-radius: 11px;
        }
    }

    @media screen and (min-width: 768px) {
        .movie_header {
            width: 65%;
        }

        .movie_desc {
            width: 50%;
        }

        .info_section {
            background: linear-gradient(to right, #e5e6e6 50%, transparent 100%);
        }

        .blur_back {
            width: 80%;
            background-position: -100% 10% !important;
        }
    }

    @media screen and (max-width: 768px) {
        .movie_card {
            width: 95%;
            margin: 70px auto;
            min-height: 350px;
            height: auto;
        }

        .blur_back {
            width: 100%;
            background-position: 50% 50% !important;
        }

        .movie_header {
            width: 100%;
            margin-top: 85px;
        }

        .movie_desc {
            width: 100%;
        }

        .info_section {
            background: linear-gradient(to top, #e5e6e6 50%, transparent 100%);
            display: inline-grid;
        }
    }

    .tomb_back {
        background: url({{ asset($movies->poster_url) }});
    }

    .ave_back {
        background: url({{ asset($movies->poster_url) }});
    }
</style>
