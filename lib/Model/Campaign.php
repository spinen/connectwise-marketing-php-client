<?php
/**
 * Campaign
 *
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Marketing
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * ConnectWise Marketing API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Marketing\Model;

use \ArrayAccess;

/**
 * Campaign Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Marketing
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Campaign implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Campaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'type' => '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignTypeReference',
        'sub_type' => '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubTypeReference',
        'status' => '\Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatusReference',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'location_id' => 'int',
        'member' => '\Spinen\ConnectWise\Clients\Marketing\Model\MemberReference',
        'inactive' => 'bool',
        'inactive_days_after_end' => 'int',
        'notes' => 'string',
        'default_group' => '\Spinen\ConnectWise\Clients\Marketing\Model\GroupReference',
        'marketing_manager_default_track_id' => 'int',
        'opportunity_default_track_id' => 'int',
        'impressions' => 'int',
        'budget_revenue' => 'double',
        'budget_cost' => 'double',
        'actual_cost' => 'double',
        'budget_gross_margin' => 'double',
        'budget_roi' => 'double',
        'actual_revenue' => 'double',
        'actual_gross_margin' => 'double',
        'actual_roi' => 'double',
        'emails_sent' => 'int',
        '_info' => '\Spinen\ConnectWise\Clients\Marketing\Model\Metadata'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'type' => 'type',
        'sub_type' => 'subType',
        'status' => 'status',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'location_id' => 'locationId',
        'member' => 'member',
        'inactive' => 'inactive',
        'inactive_days_after_end' => 'inactiveDaysAfterEnd',
        'notes' => 'notes',
        'default_group' => 'defaultGroup',
        'marketing_manager_default_track_id' => 'marketingManagerDefaultTrackId',
        'opportunity_default_track_id' => 'opportunityDefaultTrackId',
        'impressions' => 'impressions',
        'budget_revenue' => 'budgetRevenue',
        'budget_cost' => 'budgetCost',
        'actual_cost' => 'actualCost',
        'budget_gross_margin' => 'budgetGrossMargin',
        'budget_roi' => 'budgetROI',
        'actual_revenue' => 'actualRevenue',
        'actual_gross_margin' => 'actualGrossMargin',
        'actual_roi' => 'actualROI',
        'emails_sent' => 'emailsSent',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'type' => 'setType',
        'sub_type' => 'setSubType',
        'status' => 'setStatus',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'location_id' => 'setLocationId',
        'member' => 'setMember',
        'inactive' => 'setInactive',
        'inactive_days_after_end' => 'setInactiveDaysAfterEnd',
        'notes' => 'setNotes',
        'default_group' => 'setDefaultGroup',
        'marketing_manager_default_track_id' => 'setMarketingManagerDefaultTrackId',
        'opportunity_default_track_id' => 'setOpportunityDefaultTrackId',
        'impressions' => 'setImpressions',
        'budget_revenue' => 'setBudgetRevenue',
        'budget_cost' => 'setBudgetCost',
        'actual_cost' => 'setActualCost',
        'budget_gross_margin' => 'setBudgetGrossMargin',
        'budget_roi' => 'setBudgetRoi',
        'actual_revenue' => 'setActualRevenue',
        'actual_gross_margin' => 'setActualGrossMargin',
        'actual_roi' => 'setActualRoi',
        'emails_sent' => 'setEmailsSent',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'type' => 'getType',
        'sub_type' => 'getSubType',
        'status' => 'getStatus',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'location_id' => 'getLocationId',
        'member' => 'getMember',
        'inactive' => 'getInactive',
        'inactive_days_after_end' => 'getInactiveDaysAfterEnd',
        'notes' => 'getNotes',
        'default_group' => 'getDefaultGroup',
        'marketing_manager_default_track_id' => 'getMarketingManagerDefaultTrackId',
        'opportunity_default_track_id' => 'getOpportunityDefaultTrackId',
        'impressions' => 'getImpressions',
        'budget_revenue' => 'getBudgetRevenue',
        'budget_cost' => 'getBudgetCost',
        'actual_cost' => 'getActualCost',
        'budget_gross_margin' => 'getBudgetGrossMargin',
        'budget_roi' => 'getBudgetRoi',
        'actual_revenue' => 'getActualRevenue',
        'actual_gross_margin' => 'getActualGrossMargin',
        'actual_roi' => 'getActualRoi',
        'emails_sent' => 'getEmailsSent',
        '_info' => 'getInfo'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['sub_type'] = isset($data['sub_type']) ? $data['sub_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['member'] = isset($data['member']) ? $data['member'] : null;
        $this->container['inactive'] = isset($data['inactive']) ? $data['inactive'] : null;
        $this->container['inactive_days_after_end'] = isset($data['inactive_days_after_end']) ? $data['inactive_days_after_end'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['default_group'] = isset($data['default_group']) ? $data['default_group'] : null;
        $this->container['marketing_manager_default_track_id'] = isset($data['marketing_manager_default_track_id']) ? $data['marketing_manager_default_track_id'] : null;
        $this->container['opportunity_default_track_id'] = isset($data['opportunity_default_track_id']) ? $data['opportunity_default_track_id'] : null;
        $this->container['impressions'] = isset($data['impressions']) ? $data['impressions'] : null;
        $this->container['budget_revenue'] = isset($data['budget_revenue']) ? $data['budget_revenue'] : null;
        $this->container['budget_cost'] = isset($data['budget_cost']) ? $data['budget_cost'] : null;
        $this->container['actual_cost'] = isset($data['actual_cost']) ? $data['actual_cost'] : null;
        $this->container['budget_gross_margin'] = isset($data['budget_gross_margin']) ? $data['budget_gross_margin'] : null;
        $this->container['budget_roi'] = isset($data['budget_roi']) ? $data['budget_roi'] : null;
        $this->container['actual_revenue'] = isset($data['actual_revenue']) ? $data['actual_revenue'] : null;
        $this->container['actual_gross_margin'] = isset($data['actual_gross_margin']) ? $data['actual_gross_margin'] : null;
        $this->container['actual_roi'] = isset($data['actual_roi']) ? $data['actual_roi'] : null;
        $this->container['emails_sent'] = isset($data['emails_sent']) ? $data['emails_sent'] : null;
        $this->container['_info'] = isset($data['_info']) ? $data['_info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ((strlen($this->container['name']) > 50)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if ($this->container['sub_type'] === null) {
            $invalid_properties[] = "'sub_type' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalid_properties[] = "'start_date' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['name'] === null) {
            return false;
        }
        if (strlen($this->container['name']) > 50) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['sub_type'] === null) {
            return false;
        }
        if ($this->container['start_date'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        if ((strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Campaign., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\CampaignTypeReference
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\CampaignTypeReference $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets sub_type
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubTypeReference
     */
    public function getSubType()
    {
        return $this->container['sub_type'];
    }

    /**
     * Sets sub_type
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\CampaignSubTypeReference $sub_type
     * @return $this
     */
    public function setSubType($sub_type)
    {
        $this->container['sub_type'] = $sub_type;

        return $this;
    }

    /**
     * Gets status
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatusReference
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\CampaignStatusReference $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets start_date
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param \DateTime $start_date
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     * @param \DateTime $end_date
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets location_id
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     * @param int $location_id
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets member
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\MemberReference
     */
    public function getMember()
    {
        return $this->container['member'];
    }

    /**
     * Sets member
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\MemberReference $member
     * @return $this
     */
    public function setMember($member)
    {
        $this->container['member'] = $member;

        return $this;
    }

    /**
     * Gets inactive
     * @return bool
     */
    public function getInactive()
    {
        return $this->container['inactive'];
    }

    /**
     * Sets inactive
     * @param bool $inactive
     * @return $this
     */
    public function setInactive($inactive)
    {
        $this->container['inactive'] = $inactive;

        return $this;
    }

    /**
     * Gets inactive_days_after_end
     * @return int
     */
    public function getInactiveDaysAfterEnd()
    {
        return $this->container['inactive_days_after_end'];
    }

    /**
     * Sets inactive_days_after_end
     * @param int $inactive_days_after_end
     * @return $this
     */
    public function setInactiveDaysAfterEnd($inactive_days_after_end)
    {
        $this->container['inactive_days_after_end'] = $inactive_days_after_end;

        return $this;
    }

    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets default_group
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\GroupReference
     */
    public function getDefaultGroup()
    {
        return $this->container['default_group'];
    }

    /**
     * Sets default_group
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\GroupReference $default_group
     * @return $this
     */
    public function setDefaultGroup($default_group)
    {
        $this->container['default_group'] = $default_group;

        return $this;
    }

    /**
     * Gets marketing_manager_default_track_id
     * @return int
     */
    public function getMarketingManagerDefaultTrackId()
    {
        return $this->container['marketing_manager_default_track_id'];
    }

    /**
     * Sets marketing_manager_default_track_id
     * @param int $marketing_manager_default_track_id
     * @return $this
     */
    public function setMarketingManagerDefaultTrackId($marketing_manager_default_track_id)
    {
        $this->container['marketing_manager_default_track_id'] = $marketing_manager_default_track_id;

        return $this;
    }

    /**
     * Gets opportunity_default_track_id
     * @return int
     */
    public function getOpportunityDefaultTrackId()
    {
        return $this->container['opportunity_default_track_id'];
    }

    /**
     * Sets opportunity_default_track_id
     * @param int $opportunity_default_track_id
     * @return $this
     */
    public function setOpportunityDefaultTrackId($opportunity_default_track_id)
    {
        $this->container['opportunity_default_track_id'] = $opportunity_default_track_id;

        return $this;
    }

    /**
     * Gets impressions
     * @return int
     */
    public function getImpressions()
    {
        return $this->container['impressions'];
    }

    /**
     * Sets impressions
     * @param int $impressions
     * @return $this
     */
    public function setImpressions($impressions)
    {
        $this->container['impressions'] = $impressions;

        return $this;
    }

    /**
     * Gets budget_revenue
     * @return double
     */
    public function getBudgetRevenue()
    {
        return $this->container['budget_revenue'];
    }

    /**
     * Sets budget_revenue
     * @param double $budget_revenue
     * @return $this
     */
    public function setBudgetRevenue($budget_revenue)
    {
        $this->container['budget_revenue'] = $budget_revenue;

        return $this;
    }

    /**
     * Gets budget_cost
     * @return double
     */
    public function getBudgetCost()
    {
        return $this->container['budget_cost'];
    }

    /**
     * Sets budget_cost
     * @param double $budget_cost
     * @return $this
     */
    public function setBudgetCost($budget_cost)
    {
        $this->container['budget_cost'] = $budget_cost;

        return $this;
    }

    /**
     * Gets actual_cost
     * @return double
     */
    public function getActualCost()
    {
        return $this->container['actual_cost'];
    }

    /**
     * Sets actual_cost
     * @param double $actual_cost
     * @return $this
     */
    public function setActualCost($actual_cost)
    {
        $this->container['actual_cost'] = $actual_cost;

        return $this;
    }

    /**
     * Gets budget_gross_margin
     * @return double
     */
    public function getBudgetGrossMargin()
    {
        return $this->container['budget_gross_margin'];
    }

    /**
     * Sets budget_gross_margin
     * @param double $budget_gross_margin
     * @return $this
     */
    public function setBudgetGrossMargin($budget_gross_margin)
    {
        $this->container['budget_gross_margin'] = $budget_gross_margin;

        return $this;
    }

    /**
     * Gets budget_roi
     * @return double
     */
    public function getBudgetRoi()
    {
        return $this->container['budget_roi'];
    }

    /**
     * Sets budget_roi
     * @param double $budget_roi
     * @return $this
     */
    public function setBudgetRoi($budget_roi)
    {
        $this->container['budget_roi'] = $budget_roi;

        return $this;
    }

    /**
     * Gets actual_revenue
     * @return double
     */
    public function getActualRevenue()
    {
        return $this->container['actual_revenue'];
    }

    /**
     * Sets actual_revenue
     * @param double $actual_revenue
     * @return $this
     */
    public function setActualRevenue($actual_revenue)
    {
        $this->container['actual_revenue'] = $actual_revenue;

        return $this;
    }

    /**
     * Gets actual_gross_margin
     * @return double
     */
    public function getActualGrossMargin()
    {
        return $this->container['actual_gross_margin'];
    }

    /**
     * Sets actual_gross_margin
     * @param double $actual_gross_margin
     * @return $this
     */
    public function setActualGrossMargin($actual_gross_margin)
    {
        $this->container['actual_gross_margin'] = $actual_gross_margin;

        return $this;
    }

    /**
     * Gets actual_roi
     * @return double
     */
    public function getActualRoi()
    {
        return $this->container['actual_roi'];
    }

    /**
     * Sets actual_roi
     * @param double $actual_roi
     * @return $this
     */
    public function setActualRoi($actual_roi)
    {
        $this->container['actual_roi'] = $actual_roi;

        return $this;
    }

    /**
     * Gets emails_sent
     * @return int
     */
    public function getEmailsSent()
    {
        return $this->container['emails_sent'];
    }

    /**
     * Sets emails_sent
     * @param int $emails_sent
     * @return $this
     */
    public function setEmailsSent($emails_sent)
    {
        $this->container['emails_sent'] = $emails_sent;

        return $this;
    }

    /**
     * Gets _info
     * @return \Spinen\ConnectWise\Clients\Marketing\Model\Metadata
     */
    public function getInfo()
    {
        return $this->container['_info'];
    }

    /**
     * Sets _info
     * @param \Spinen\ConnectWise\Clients\Marketing\Model\Metadata $_info Metadata of the entity
     * @return $this
     */
    public function setInfo($_info)
    {
        $this->container['_info'] = $_info;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Spinen\ConnectWise\Clients\Marketing\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Spinen\ConnectWise\Clients\Marketing\ObjectSerializer::sanitizeForSerialization($this));
    }
}

