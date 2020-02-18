<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Hourly Price
            </header>
            <div class="" style="padding: 1em;">

<input type='hidden' id='url_id' value='<?php echo $url_id;?>' />

<div class="col-lg-12 text-center">               
    <div class="form-group row">
        <div class="col-sm-3">
            <input value="<?php echo $date;?>" placeholder="Enter date" class="form-control round-input date" id="inp_date" type="text">
        </div>
        <div class="col-sm-1">    
            <input class=" form-control" id="btn_view" value="view" onclick="load_chart();false;" type="button">
        </div>
    </div>

</div>
                            

<div class="col-lg-12">
<div id="chart_price"><a href='<?php echo base_url()."fabs/page_2   ";?>'>Choose one product</a></div>
</div>
<dic 
            </div>
        </section>
    </div>
</div>