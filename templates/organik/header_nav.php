<div class="dropdown profile-element">
    <span>
    <?php
        $user->profile_picture = @if_empty($user->profile_picture, 'no-avatar.png') ;
        
        if($user->profile_picture == 'no-avatar.png') $_foto = 'uploads/profile/no-avatar.png';

        else $_foto = file_exists("uploads/files/".$user->no_ktp."/".$user->profile_picture) ? "uploads/files/".$user->no_ktp."/".$user->profile_picture : 'uploads/profile/no-avatar.png';
        
        /* special for gmho*/
        if(is_login('group_name') == 'gmho') $_foto = 'templates/organik/img/logo.png';

        echo '<img alt="'.$_foto.'" class="img-circle" width="150" height="150"  src="'. img_profile($_foto, 250,250).'" />';
    ?>
    </span>

    <span class="clear"> 
        <span class="block m-t-xs"> 
            <strong class="font-bold"><?php echo @if_empty($user->nama, is_login('name'));?></strong>
        </span>
        <span class="text-muted text-xs block">
        <?php echo @if_empty($user->position_name,"Karyawan"); ?> 
        </span>
    </span>
</div>