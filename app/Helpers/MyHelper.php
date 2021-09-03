<?php
function cobahelper(){
    $a = "ini coba helper";
    return $a;
}

function mymodal($target,$title,$message,$tombol,$jenis){
    if($jenis=="danger"){
        $jns="btn btn-danger";
    }elseif($jenis=="success"){
        $jns="btn btn-success";
    }elseif($jenis=="warning"){
        $jns="btn btn-warning";
    }else{
        $jns="btn btn-primary";
    }
    $html = '
    <div class="modal fade" id='.$target.'>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">'.$title.'</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          '.$message.'
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="'.$jns.'" >'.$tombol.'</button>
        </div>
      </div>
    </div>
  </div>
  </form>
  ';
    return $html;
}