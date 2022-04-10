<div onclick="clearText()" class="modal fade" id="jq_modal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title"></h5>
                <button onclick="closeModal()" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal_body">
                <div id="modal_text">

                </div>

                <div id="spinner" class="spinner-border" role="status" style="margin-left: 45%;">
                    <span class="sr-only"></span>
                </div>
            </div>
            <div class="modal-footer" id="modal_footer">
                <button onclick="closeModal()" type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
{{--            todo: добавить кнопку написать в модалке вакансии--}}
        </div>
    </div>
</div>

<script>
    function openModal(id, event){
        if(event.target.id === "fav"){
            return;
        }
        $('#jq_modal').modal('show');
        $('#spinner').show();
        let data = {
            id: id,
            _token: "{{csrf_token()}}"
        }
        let url = "/get_vacancy/" + id;
        $.post(url, data, function (res){
            console.log(res);
            $('#modal_title').text(res.vacancy.name);
            $('#modal_text').append('<p class="small-text disabled">' + res.vacancy.company_name  + '</p>'
                + '<p class="small-text disabled">требуемый опыт: ' + res.vacancy.expirience  + '</p>'
                +'<p class="small-text disabled">заработная плата: ' + res.vacancy.salary  + ' рублей</p>' + res.vacancy.description)
            if(res.vacancy.is_creator === false){
                $('#modal_footer').prepend('<a href="javascript:void(0)" class="btn btn-primary" style="left: 10px; position: absolute;">Написать работодателю</a>');
            }
            $('#spinner').hide();
        });
    }
    function closeModal(){
        $('#jq_modal').modal('hide');
        $('#modal_text').empty();
    }
    function clearText(){
        $('#modal_text').empty();
    }
</script>
