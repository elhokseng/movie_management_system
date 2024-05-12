@extends('layouts.app')
@include('layouts.navigation')  
@section('main')
    <div class="content">
        <div class="box_wrapper">
            <div class="box_body">
                <div class="movie_card" id="tomb">
                    <div class="info_section">
                        <div class="movie_header">
                            <img class="locandina" src="{{ asset($movies->poster_url) }}" />
                            <h1> {{$movies->title}} </h1>
                            <h4>2018, Roar Uthaug</h4>      
                            <span class="minutes">{{$movies->duration}}</span>
                            <p class="type"> {{$movies->genre->name}} </p>
                        </div>
                        <div class="movie_desc">
                            <p class="text">
                                {{$movies->synopsis}}
                            </p>
                        </div>
                    </div>
                    <div class="blur_back tomb_back"></div>
                </div>
            </div>
        </div>
    </div>   
    
    @if (Auth::user())
    <div class="content">
        <div class="screen">
           <h2 class="wthree">Choose your seat</h2>
       </div>
        <div class="box-wrapp mb-5">
           <div class="row">
               <div class="col-md-5">
                    <div class="seatStructure txt-center" style="overflow-x:auto;">
                     <table id="seatsBlock">
                         <p id="notification"></p>
                         <tr>
                             <td></td>
                             <td>1</td>
                             <td>2</td>
                             <td>3</td>
                             <td>4</td>
                             <td>5</td>
                             <td></td>
                             <td>6</td>
                             <td>7</td>
                             <td>8</td>
                             <td>9</td>
                             <td>10</td>
                             <td>11</td>
                             <td>12</td>
                         </tr>
                         <tr>
                             <td>A</td>
                             <td>
                                 <input type="checkbox" class="seats" value="A1">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="A2">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="A3">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="A4">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="A5">
                             </td>
                             <td class="seatGap"></td>
                             <td>
                                 <input type="checkbox" class="seats" value="A6">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="A7">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="A8">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="A9">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="A10">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="A11">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="A12">
                             </td>
                         </tr>
     
                         <tr>
                             <td>B</td>
                             <td>
                                 <input type="checkbox" class="seats" value="B1">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="B2">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="B3">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="B4">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="B5">
                             </td>
                             <td></td>
                             <td>
                                 <input type="checkbox" class="seats" value="B6">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="B7">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="B8">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="B9">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="B10">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="B11">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="B12">
                             </td>
                         </tr>
     
                         <tr>
                             <td>C</td>
                             <td>
                                 <input type="checkbox" class="seats" value="C1">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="C2">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="C3">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="C4">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="C5">
                             </td>
                             <td></td>
                             <td>
                                 <input type="checkbox" class="seats" value="C6">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="C7">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="C8">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="C9">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="C10">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="C11">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="C12">
                             </td>
                         </tr>
     
                         <tr>
                             <td>D</td>
                             <td>
                                 <input type="checkbox" class="seats" value="D1">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="D2">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="D3">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="D4">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="D5">
                             </td>
                             <td></td>
                             <td>
                                 <input type="checkbox" class="seats" value="D6">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="D7">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="D8">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="D9">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="D10">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="D11">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="D12">
                             </td>
                         </tr>
     
                         <tr>
                             <td>E</td>
                             <td>
                                 <input type="checkbox" class="seats" value="E1">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="E2">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="E3">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="E4">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="E5">
                             </td>
                             <td></td>
                             <td>
                                 <input type="checkbox" class="seats" value="E6">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="E7">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="E8">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="E9">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="E10">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="E11">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="E12">
                             </td>
                         </tr>
     
                         <tr class="seatVGap"></tr>
     
                         <tr>
                             <td>F</td>
                             <td>
                                 <input type="checkbox" class="seats" value="F1">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="F2">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="F3">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="F4">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="F5">
                             </td>
                             <td></td>
                             <td>
                                 <input type="checkbox" class="seats" value="F6">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="F7">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="F8">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="F9">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="F10">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="F11">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="F12">
                             </td>
                         </tr>
     
                         <tr>
                             <td>G</td>
                             <td>
                                 <input type="checkbox" class="seats" value="G1">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="G2">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="G3">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="G4">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="G5">
                             </td>
                             <td></td>
                             <td>
                                 <input type="checkbox" class="seats" value="G6">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="G7">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="G8">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="G9">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="G10">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="G11">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="G12">
                             </td>
                         </tr>
     
                         <tr>
                             <td>H</td>
                             <td>
                                 <input type="checkbox" class="seats" value="H1">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="H2">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="H3">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="H4">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="H5">
                             </td>
                             <td></td>
                             <td>
                                 <input type="checkbox" class="seats" value="H6">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="H7">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="H8">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="H9">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="H10">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="H11">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="H12">
                             </td>
                         </tr>
     
                         <tr>
                             <td>I</td>
                             <td>
                                 <input type="checkbox" class="seats" value="I1">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="I2">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="I3">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="I4">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="I5">
                             </td>
                             <td></td>
                             <td>
                                 <input type="checkbox" class="seats" value="I6">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="I7">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="I8">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="I9">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="I10">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="I11">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="I12">
                             </td>
                         </tr>
     
                         <tr>
                             <td>J</td>
                             <td>
                                 <input type="checkbox" class="seats" value="J1">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="J2">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="J3">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="J4">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="J5">
                             </td>
                             <td></td>
                             <td>
                                 <input type="checkbox" class="seats" value="J6">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="J7">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="J8">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="J9">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="J10">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="J11">
                             </td>
                             <td>
                                 <input type="checkbox" class="seats" value="J12">
                             </td>
                         </tr>
                     </table>
     
                     <div class="mt-4 ms-5">
                       <button class="btn btn-primary" onclick="updateTextArea()">Confirm Selection</button>
                     </div>
                 </div>
                    
               </div>                            
               <div class="col-md-4 ">
                   <form>
                       <div class="form-group">
                       <label for="exampleInputEmail1">Name</label>
                       <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name">
                       
                   </div>
                   <div class="form-group">
                       <label for="exampleInputEmail1">Email address</label>
                       <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                       <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                   </div>
                   
                   <div class="form-check mb-2">
                       <input type="checkbox" class="form-check-input" id="exampleCheck1">
                       <label class="form-check-label" for="exampleCheck1">Check me out</label>
                   </div>
                       <button type="submit" class="btn btn-primary">Proceed to Payment</button>   
                   </form>
               </div>
          </div>
        </div>
   </div>       
    @endif
    
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
