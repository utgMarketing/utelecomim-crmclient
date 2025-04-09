<?php

namespace UtelecomIM\CRMClient;

class LeadDTO
{
    /**
     * Веб-сайт
     */
    const SOURCE_SITE = "site";

    /**
     * Звонок
     */
    const SOURCE_CALL = "call";

    /**
     * Свой контакт
     */
    const SOURCE_YOUR_CONTACT = "your_contact";

    /**
     * Холодный обзвон
     */
    const SOURCE_COLD_CALLING = "cold_calling";

    /**
     * Отказ - ПЕРЕДУМАЛ
     */
    const SOURCE_REJECT = "reject";


    /**
     * Не обработан
     */
    const STATUS_NOT_PROCESSED = "not_processed";

    /**
     * Принят в работу
     */
    const STATUS_IN_WORK = "in_work";

    /**
     * Не удалось связаться
     */
    const STATUS_FAILED_TO_CONTACT = "failed_to_contact";

    /**
     * Не желает разговаривать
     */
    const STATUS_UNWILLING_TO_TALK = "unwilling_to_talk";

    /**
     * Принимает решение
     */
    const STATUS_MAKES_A_DECISION = "makes_a_decision";

    /**
     * Качественный лид
     */
    const STATUS_QUALITY_LEAD = "quality_lead";

    /**
     * Некачественный лид
     */
    const STATUS_LOW_QUALITY_LEAD = "low-quality_lead";

    /**
     * Завершить обработку
     */
    const STATUS_FINISH_PROCESSING = "finish_processing";

    /**
     * @var string
     */
    public $title = "";

    /**
     * @var string
     */
    public $user_first_name = "";

    /**
     * @var string
     */
    public $user_phone = "";

    /**
     * @var string
     */
    public $user_city = "";

    /**
     * @var string
     */
    public $user_address = "";

    /**
     * @var string
     */
    public $user_tariff_name = "";

    /**
     * @var string
     */
    public $user_street = "";

    /**
     * @var string
     */
    public $user_home = "";

    /**
     * @var string
     */
    public $user_flat = "";

    /**
     * @var string
     */
    public $comment = "";

    /**
     * @var string
     */
    public $source_name = "";

    /**
     * @var string
     */
    public $status_name = "";

    /**
     * @var ?int
     */
    public $trademark_id;

    /**
     * @var LeadFieldDTO
     */
    public $lead_field;
}
