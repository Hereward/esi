<div style="display:<?=($logged_in)?'block':'none';?>" class="container-fluid taskbar hidden-xs">
    <div class="row">
         <div class="sub-container">
            <div class="col-sm-12">
                <p class="pull-left"><img style="vertical-align:top;" src="<?=$my_assets?>/images/icons/member.png" alt="member">&nbsp;Hi, <? echo "$user->firstname $user->lastname";?></p>
                <p class="pull-right">1300 442 676 &nbsp; Make a claim &nbsp; Request a quote &nbsp; <a href="/member-area/logout">Log out</a></p>
            </div>
         </div>
    </div>
</div>
