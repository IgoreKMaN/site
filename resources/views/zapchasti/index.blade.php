@extends('index')
       
      @section('content')  
      <style>
          .style{
              border: 4px solid #245269;
              border-radius: 20px;
              font-family: arial,sans-serif;
              font-size: 15px;
              padding: 5px;
          }
          .col-lg-3{
              margin: 10px;
              border: 4px solid #245269 ;
              border-radius: 20px;
              height: 402px;
          }
          span{
              font-weight: bold;
              font-size: 15px;
              font-family: Verdana, sans-serif;
            
          }
          #button{
              border-radius: 10px;
              border-color: #204d74 ;
          }
      </style>
       <?php
       
       if(isset($_POST["button"])){
           echo "Работает";}
 else {
     echo "НЕЕЕЕЕ Работает";
 }
       
       ?>
          <div class="col-lg-3">
              <form action="http://localhost" method="POST" id="id-form-message">
            
            <div class="form-group"
            <label for="ves">Weight </label>
                <input class="form-control" placeholder="From" type="number" name="ves1" id="ves1"/></br> 
                <input class="form-control" placeholder="Before" type="number" name="ves2" id="ves2"/>
            </div>
            
            <div class="form-group"
            <label for="proizv">Monufacturer </label>
                <select class="form-control"  name="proizv" id="proizv"/>
                <option disabled="disabled" selected="selected">Select manufacturer</option>
                    @foreach($zaps as $zap)
                    <option>{!!$zap->monufacturer!!}</option>
                    @endforeach 
                </select>
            </div>
            
            <div class="form-group"
            <label for="cost">Cost </label>
            <input class="form-control" placeholder="From" type="number" name="cost1" id="cost"/><br/>
            <input class="form-control" placeholder="Before" type="number" name="cost2" id="cost"/>
            </div>
            
            <div class="form-group"
            <label for="group">Car brand(group) </label>
                <select class="form-control" name="group" id="group"/>
                <option disabled="disabled" selected="selected"> Select the model of car</option>
                    @foreach($zaps as $zap)
                    <option>{!!$zap->group!!}</option>
                    @endforeach 
                </select>
            </div> 
            
            <div class="form-group">
                <input type="submit" name="button" id="button" value="Посмотреть" />
            </div>     
                
            </div>
            </form>
            <div class="col-lg-5">
                
                    @if(!$zaps->isEmpty())
                    @foreach($zaps as $zap)
                    <div class="form-group">
                        <div class="style">
                            <span>Name: </span>{!!$zap->name!!}<br/>
                            <span>Weight: </span>{!!$zap->weight!!} gram<br/>
                            <span>Monufacturer: </span>{!!$zap->monufacturer!!}<br/>
                            <span>Cost: </span>{!!$zap->cost!!} $<br/>
                            <span>Car brand(group): </span>{!!$zap->group!!}<br/>
                        </div>
                    </div>   
                    @endforeach
                    @endif
                    <span></span>
            </div>

              
            @stop
            
           
 