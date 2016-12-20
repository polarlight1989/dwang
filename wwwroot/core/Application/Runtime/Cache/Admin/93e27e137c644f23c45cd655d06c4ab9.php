<?php if (!defined('THINK_PATH')) exit();?><div ng-page-nav ></div>
 <h1 class="page-title"> <?php echo alang('articles');?>  
                        </h1>
<div  ng-data-table columns="columns" funcs='funcs'  mod='mod'  title='{{title}}' postparams='postparams' oper='oper' actions='actions'></div>