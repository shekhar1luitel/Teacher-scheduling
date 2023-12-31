<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <section>
                        <h4 class="mb-4">Fill Form</h4>
                        <form class="forms-sample" method="POST" action="{{ route('classname') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="class" class="form-label">Add Class</label>
                                <input type="name" class="form-control" name="class" id="school-name"
                                    placeholder="Class Name" required>
                            </div>
                            <div>
                                <input type="submit" value="Submit Class"
                                    class="btn btn-primary me-2 mb-2 mb-md-0 text-white">
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
