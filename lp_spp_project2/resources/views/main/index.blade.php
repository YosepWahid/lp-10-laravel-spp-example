@extends('layout.app')

@section('title', 'Dashboard')

@section('content')

    <!-- Modal trigger button -->
    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
        Launch
    </button>

    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi a consectetur quos vel dolore
                    adipisci provident aperiam itaque autem. Cum sit ratione ipsa! Facilis minima libero ea a asperiores
                    fugiat voluptas iste esse sint aliquam? Dolore alias architecto maiores eaque ipsam est, autem soluta
                    hic provident earum. Doloribus, quo laudantium consequuntur at inventore autem nam aut nulla
                    perspiciatis quos aliquam, odio repellat, illo corrupti aperiam qui asperiores quae distinctio sapiente
                    consectetur natus! Placeat ducimus tenetur suscipit, deserunt optio, architecto ipsa harum, quis aut
                    corporis est non! Id aspernatur qui earum impedit, numquam molestiae nam autem sapiente, totam, culpa
                    quam quas.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
    </script>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
        Launch
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum eligendi quisquam sit ullam, quas
                        similique debitis, voluptatum officia quibusdam quod minus? Distinctio rerum labore voluptate
                        recusandae, quis voluptates quo eius suscipit fuga accusantium, doloremque non officia. Aliquid
                        optio laborum, alias beatae magni, excepturi, odit officiis dolorem eligendi aut quo pariatur eum
                        temporibus necessitatibus modi fugit quas ullam. Saepe, quae doloremque non sit rerum amet commodi
                        perspiciatis libero ab et impedit quam quasi cum laboriosam, vel laudantium minima placeat. Minus a
                        minima commodi? Voluptates quos magnam recusandae tempora officiis totam ex. Laboriosam placeat
                        alias corporis. Tenetur dignissimos reiciendis quidem libero animi.
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var modalId = document.getElementById('modalId');

        modalId.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            let button = event.relatedTarget;
            // Extract info from data-bs-* attributes
            let recipient = button.getAttribute('data-bs-whatever');

            // Use above variables to manipulate the DOM
        });
    </script>

@endsection
