<?php

namespace UtelecomIM\CRMClient;

class LeadDTO
{
    /**
     * @var string|null
     */
    public $title;

    /**
     * @var string|null
     */
    public $user_first_name;

    /**
     * @var string|null
     */
    public $user_phone;

    /**
     * @var string|null
     */
    public $user_city;

    /**
     * @var string|null
     */
    public $user_address;

    /**
     * @var string|null
     */
    public $user_tariff_name;

    /**
     * @var string|null
     */
    public $user_street;

    /**
     * @var string|null
     */
    public $user_home;

    /**
     * @var string|null
     */
    public $user_flat;

    /**
     * @var string|null
     */
    public $comment;

    /**
     * @var string|null
     */
    public $source_name;

    /**
     * @var string|null
     */
    public $status_name;

    /**
     * @var LeadFieldDTO|null
     */
    public $lead_field;
}
