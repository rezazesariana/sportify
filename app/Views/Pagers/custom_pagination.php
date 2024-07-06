<!-- app/Views/Pagers/custom_pagination.php -->
<?php if ($pager) : ?>
    <div class="col-lg-12">
        <nav aria-label="Page navigation" class="pagination-main text-center">
            <ul class="pagination">
                <?php if ($pager->hasPrevious()) : ?>
                    <li class="page-item">
                        <a class="page-link" href="<?= $pager->getFirst() ?>" aria-label="First">
                            <i class="fa fa-angle-double-left" aria-hidden="true">
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="Previous">
                            <i class="fa fa-angle-left" aria-hidden="true">
                        </a>
                    </li>
                <?php endif ?>

                <?php foreach ($pager->links() as $link) : ?>
                    <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                        <a class="page-link" href="<?= $link['uri'] ?>">
                            <?= $link['title'] ?>
                        </a>
                    </li>
                <?php endforeach ?>

                <?php if ($pager->hasNext()) : ?>
                    <li class="page-item">
                        <a class="page-link" href="<?= $pager->getNext() ?>" aria-label="Next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="<?= $pager->getLast() ?>" aria-label="Last">
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        </a>
                    </li>
                <?php endif ?>
            </ul>
        </nav>
    </div>
<?php endif ?>
