<?php error_reporting(E_ALL ^ E_NOTICE);
if(isset($list)){	
	$val=$list->row_array();
}
?>
<div class="row">
 <div class="col-lg-12 col-ml-12">
   <div class="row">
                            <!-- Textual inputs start -->
     <div class="col-12 mt-5">
      <div class="card">
       <div class="card-body">
        <h2><i class="<?php echo GetValue('icon','sv_menu',array('filez'=>'where/'.$this->utama))?>"></i> <?php echo $this->title;?></h2>

    	<div class="box-content">
       <form method="post" enctype="multipart/form-data" action="<?php echo base_url($this->utama)?>/submit">
    		<div class="form-group">
            <?php echo form_hidden('id',isset($val['id']) ? $val['id'] : '')?>
            
            <?php $nm_f="title";?>
                        <label for="<?php echo $nm_f?>"><?php echo ucfirst($nm_f)?></label>
                        <input type="text" name="<?php echo $nm_f?>"  id="<?php echo $nm_f?>" value="<?php echo $a= (isset($val[$nm_f]) ? $val[$nm_f] : '') ?>" class="form-control">
    		
             </div>
             <div class="form-group">
            
            <?php $nm_f="id_parents";?>
                        <label for="<?php echo $nm_f?>"><?php echo ucfirst($nm_f)?></label>
                        <?php echo form_dropdown($nm_f,$opt,isset($val[$nm_f]) ? $val[$nm_f] : ''," data-rel='chosen'")?>
             </div>
             <div class="form-group">
            
            <?php $nm_f="filez";?>
                        <label for="<?php echo $nm_f?>"><?php echo ucfirst($nm_f)?></label>
                        <input type="text" name="<?php echo $nm_f?>"  id="<?php echo $nm_f?>" value="<?php echo $a= (isset($val[$nm_f]) ? $val[$nm_f] : '') ?>" class="form-control">
    		
             </div>
             <div class="form-group">
            
            <?php $nm_f="icon";?>
                        <label for="<?php echo $nm_f?>"><?php echo ucfirst($nm_f)?></label>
                        <input type="text" name="<?php echo $nm_f?>"  id="<?php echo $nm_f?>" value="<?php echo $a= (isset($val[$nm_f]) ? $val[$nm_f] : '') ?>" class="form-control">
    		
             </div>
             <div class="form-group">
            
            <?php $nm_f="sort";?>
                        <label for="<?php echo $nm_f?>"><?php echo ucfirst($nm_f)?></label>
                        <input type="text" name="<?php echo $nm_f?>"  id="<?php echo $nm_f?>" value="<?php echo $a= (isset($val[$nm_f]) ? $val[$nm_f] : '') ?>" class="form-control">
    		
             </div>
    		
    		<div class="form-group">
                        <label for="exampleInputEmail3">Is Active?</label> 
                        <input data-no-uniform="true" type="checkbox" <?php echo $a = ($val['is_active']=='Active' ? 'checked' : '');?> name="is_active" class="iphone-toggle">
             </div>
    		<div class="form-group">
            <button type="submit" class="btn pull-right">Submit</button>
            </form>
             </div>
    	</div>
    	
    </div>
    </div>
</div>
   </div>
 </div>
</div>