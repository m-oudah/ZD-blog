<?php
//Admin Functions ***


//delete images when delete Services Type
function deleteImagesFromSubServices($id){
    try
    {
        $subServices =\App\Model\subServices::where('classId',$id)->get();
        foreach ($subServices as $img) {
            unlink(public_path('/images/'.$img->img));
        }

    }catch(\Exception $exception){
    }
}

?>
