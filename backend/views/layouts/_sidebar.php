<?php
?>

<aside class="shadow">
    <?php echo \yii\bootstrap5\Nav::widget([
        'options' => [
            'class' => 'd-flex flex-column nav-pills'
        ],
        'items' => [
            [
                'label' => 'Dashboard',
                'url' => ['/site/index']
            ],
            [
                'label' => 'Brands',
                'url' => ['/brands/index']
            ],
            [
                'label' => 'Categories',
                'url' => ['/categories/index']
            ],
            [
                'label' => 'Banks',
                'url' => ['/banks/index']
            ],
            [
                'label' => 'Order Status',
                'url' => ['/orderstatus/index']
            ],
            [
                'label' => 'Permissions',
                'url' => ['/permissions/index']
            ],
            [
                    'label' => 'Slide Shows',
                'url' => ['/slideshows/index']
            ],
            [
                    'label' => 'Products',
                'url' => ['/products/index']
            ],
            [
                    'label' => 'Videos',
                'url' => ['video/index']
            ]
        ]
    ]) ?>
</aside>


