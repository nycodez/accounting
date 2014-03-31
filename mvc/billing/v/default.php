<?php

include $_SERVER['DOCUMENT_ROOT'] .'/html/header.php';
include $_SERVER['DOCUMENT_ROOT'] .'/html/sidebar.php';

?>
<!-- main container -->
    <div class="content">

<?php

//include $_SERVER['DOCUMENT_ROOT'] .'/html/stats.php';

?>
        <div id="pad-wrapper">

            <!-- statistics chart built with jQuery Flot -->
            <div class="row chart">
            <div class="table-products">
                <div class="row head">
                    <div class="col-md-12">
                        <h4>Open Invoices <small>Past 30 days</small></h4>
                    </div>
                </div>

                <div class="row filter-block">
                    <div class="col-md-4 col-md-offset-8">
						<a href="/invoices" class="btn-flat primary new-product">+ Invoice</a>
						<a href="/expenses" class="btn-flat default new-product">+ Expense</a>

                    </div>
                </div>

                <div class="row">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="col-md-3">
                                    <input type="checkbox">
                                    Invoice
                                </th>
                                <th class="col-md-3">
                                    <span class="line"></span>Description
                                </th>
                                <th class="col-md-3">
                                    <span class="line"></span>Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row -->
                            <tr class="first">
                                <td>
                                    <input type="checkbox">
                                    <div class="img">
                                        <img src="/img/table-img.png" alt="pic" />
                                    </div>
                                    <a href="#">There are many variations </a>
                                </td>
                                <td class="description">
                                    if you are going to use a passage of Lorem Ipsum.
                                </td>
                                <td>
                                    <span class="label label-success">Active</span>
                                    <ul class="actions">
                                        <li><i class="table-edit"></i></li>
                                        <li><i class="table-settings"></i></li>
                                        <li class="last"><i class="table-delete"></i></li>
                                    </ul>
                                </td>
                            </tr>
                            <!-- row -->
                            <tr>
                                <td>
                                    <input type="checkbox">
                                    <div class="img">
                                        <img src="/img/table-img.png" alt="pic" />
                                    </div>
                                    <a href="#">Internet tend</a>
                                </td>
                                <td class="description">
                                    There are many variations of passages.
                                </td>
                                <td>
                                    <ul class="actions">
                                        <li><i class="table-edit"></i></li>
                                        <li><i class="table-settings"></i></li>
                                        <li class="last"><i class="table-delete"></i></li>
                                    </ul>
                                </td>
                            </tr>
                            <!-- row -->
                            <tr>
                                <td>
                                    <input type="checkbox">
                                    <div class="img">
                                        <img src="/img/table-img.png" alt="pic" />
                                    </div>
                                    <a href="#">Many desktop publishing </a>
                                </td>
                                <td class="description">
                                    if you are going to use a passage of Lorem Ipsum.
                                </td>
                                <td>
                                    <ul class="actions">
                                        <li><i class="table-edit"></i></li>
                                        <li><i class="table-settings"></i></li>
                                        <li class="last"><i class="table-delete"></i></li>
                                    </ul>
                                </td>
                            </tr>
                            <!-- row -->
                            <tr>
                                <td>
                                    <input type="checkbox">
                                    <div class="img">
                                        <img src="/img/table-img.png" alt="pic" />
                                    </div>
                                    <a href="#">Generate Lorem </a>
                                </td>
                                <td class="description">
                                    There are many variations of passages.
                                </td>
                                <td>
                                    <span class="label label-info">Standby</span>
                                    <ul class="actions">
                                        <li><i class="table-edit"></i></li>
                                        <li><i class="table-settings"></i></li>
                                        <li class="last"><i class="table-delete"></i></li>
                                    </ul>
                                </td>
                            </tr>
                            <!-- row -->
                            <tr>
                                <td>
                                    <input type="checkbox">
                                    <div class="img">
                                        <img src="/img/table-img.png" alt="pic" />
                                    </div>
                                    <a href="#">Internet tend</a>
                                </td>
                                <td class="description">
                                    There are many variations of passages.
                                </td>
                                <td>                                        
                                    <ul class="actions">
                                        <li><i class="table-edit"></i></li>
                                        <li><i class="table-settings"></i></li>
                                        <li class="last"><i class="table-delete"></i></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <!-- end table sample -->
        </div>
    </div>
<?php

include $_SERVER['DOCUMENT_ROOT'] .'/html/footer.php';

?>
