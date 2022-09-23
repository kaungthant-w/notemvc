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
                    title:"Note have created.",
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
        $response = CardModel::mdlShowCard($table, $item, $value);
        return $response;
    }

    // edit card
    static public function ctrlEditCard() {
        if(isset($_POST["editTitle"])) {
            $table = "note";
            $data = [
                "title" => $_POST["editTitle"],
                "description" => $_POST["editDescription"],
                "id" => $_POST["idCard"]
            ];

            $response = CardModel::mdlEditCard($table, $data);

            if($response == "ok") {
                echo '<script>
                    swal({
                        type:"success",
                        title:"note have Updated.",
                        showConfirmButton:true,
                        confirmButtonText:"Finish",
                        closeConfirm:false,
                    }).then(result=>{
                        if(result.value){
                            window.location ="card";
                        }
                    })
                
                </script>';
            }else {
                echo '
                    <script>
                        swal({
                            type:"error",
                            title:"Card cann\'t change",
                            showConfirmButton:true,
                            closeOnConfirm:false
                        }).then(result => {
                            if(result.value){
                                window.location = "card";
                            }
                        })
                    </script>
                ';
            }
        } 
    }
    
    // delete card
    static public function ctrlDeleteCard(){
        if(isset($_GET["idCard"])) {
            $table = "note";
            $data = $_GET["idCard"];

            $response = CardModel::mdlDelteCard($table, $data);

            if($response == "ok") {
                echo '
                    <script>
                        swal({
                            type:"success",
                            title:"note have been deleted",
                            showConfirmButton:true,
                            confirmButtonText:"Finish",
                            closeOnConfirm:false
                        }).then(result=>{
                            if(result.value){
                                window.location = "card";
                            }
                        })
                    </script>
                ';
            }
        }
    }
}