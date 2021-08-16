<?php

return [
    'admin'=>[
        'top'=>[
            [
                'name' => 'Tổng Quan',
                'icon' => 'mdi mdi-view-dashboard-outline',
                'route' => '',
                'target' => 'tq',
                'menu_sub1' =>[
                    [
                    'name' => 'Thống Kê',
                    'route' => 'get_backend.home',
                    ],
                ],
            ],
            [
                'name' => 'Sản Phẩm',
                'icon' => 'mdi mdi-folder-multiple',
                'route' =>'',
                'target' => 'sp',
                'menu_sub1' =>[
                    [
                        'name' => 'Danh Mục Cha',
                        'route' => '',
                        'target' => 'dm',
                        'menu_sub2'=>[
                            [
                                'name' => 'Tổng Quan',
                                'route' => 'get_backend.category.index',
                            ],
                            [
                                'name' => 'Thêm Mới',
                                'route' => 'get_backend.category.create',
                            ],
                            [
                                'name' => 'Danh Mục Con',
                                'route' => 'get_backend.categoryChild.index',
                            ],
                        ],
                    ],          
                    [
                        'name' => 'Danh Sách',
                        'route' => '',
                        'target' => 'dmsp',
                        'menu_sub2'=>[
                            [
                                'name' => 'Tổng Quan',
                                'route' => 'get_backend.product.index',
                            ],
                            [
                                'name' => 'Thêm Mới',
                                'route' => 'get_backend.product.create',
                            ],
                        ],
                    ],
                    [  
                        'name' => 'Bảng Giảm Giá',
                        'route' => 'get_backend.discount.index',
                    ],
                    [  
                        'name' => 'Thương Hiệu',
                        'route' => 'get_backend.brand.index',
                    ],
                ],
            ],
            [
                'name' => 'Blog',
                'icon' => 'mdi mdi-newspaper',
                'route' =>'',
                'target' => 'blog',
                'menu_sub1' =>[
                    [
                        'name' => 'Danh Mục',
                        'route' => 'get_backend.categoryBlog.index',
                    ],
                    [
                        'name' => 'Danh Sách',
                        'route' => '',
                        'target' => 'dsbl',
                        'menu_sub2'=>[
                            [
                                'name' => 'Tổng Quan',
                                'route' => 'get_backend.blog.index',
                            ],
                            [
                                'name' => 'Thêm Mới',
                                'route' => 'get_backend.blog.create',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Thanh Toán',
                'icon' => 'mdi mdi-cash-usd',
                'route' => 'get_backend.payment.index',
            ],
            [
                'name' => 'Khuyến Mãi',
                'icon' => 'mdi mdi-gift',
                'route' => 'get_backend.promotion.index',
            ],
            [
                'name' => 'Đơn Hàng',
                'icon' => 'mdi mdi-currency-usd',
                'route' => 'get_backend.order.index',
            ],
            [
                'name' => 'Tag',
                'icon' => 'mdi mdi-library-books',
                'route' => 'get_backend.tag.index',
            ],
            [
                'name' => 'Khách Hàng',
                'icon' => 'mdi mdi-clipboard-account',
                'route' => 'get_backend.customer.index',
            ],
            [
                'name' => 'Thành Viên',
                'icon' => 'mdi mdi-account-multiple',
                'route' =>'',
                'target' => 'account',
                'menu_sub1' =>[
                    [
                        'name' => 'Danh Sách',
                        'route' => 'get_backend.account.index',
                    ],
                    [
                        'name' => 'Thêm Mới',
                        'route' => 'get_backend.account.create',
                    ],
                ],
            ],
        ],
    ],
];