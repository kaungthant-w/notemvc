<?php

class CardController {
    //create card
    public function ctrlCreateCard() {
        if(isset($_POST["addTitle"])) {
            $table = "note";
        $data = [
            "title" => $_POST["addTitle"],
            "description" => $_POST["addDescription"]
        ];

        // var_dump($data);
        // echo "<br>";

        $res = CardModel::mdlCreateCard($table, $data);
        // var_dump($res);

        if($res == "ok") {
            echo '<script>
                swal({
                    type:"success",
                    title:"note have created",
                    showConfirmButton:true,
                    confirmButtonText:"Finish",
                    closeConfirm:false,
                }).then(result=>{
                    if(result.value){
                        window.location ="card";
                    }
                })
            
            </script>';
        }
        }
    }

    // show card
    static public function ctrlShowCard($item, $value) {
        $table = "note";
        $res = CardModel::mdlShowCard($table, $item, $value);
        return $res;
    }
}