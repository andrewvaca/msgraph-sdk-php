<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ExchangeConnectors\Item\Sync;

use Microsoft\Graph\Generated\Models\DeviceManagementExchangeConnectorSyncType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SyncRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DeviceManagementExchangeConnectorSyncType|null $syncType The syncType property */
    private ?DeviceManagementExchangeConnectorSyncType $syncType = null;
    
    /**
     * Instantiates a new syncRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SyncRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SyncRequestBody {
        return new SyncRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'syncType' => function (self $o, ParseNode $n) { $o->setSyncType($n->getEnumValue(DeviceManagementExchangeConnectorSyncType::class)); },
        ];
    }

    /**
     * Gets the syncType property value. The syncType property
     * @return DeviceManagementExchangeConnectorSyncType|null
    */
    public function getSyncType(): ?DeviceManagementExchangeConnectorSyncType {
        return $this->syncType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('syncType', $this->syncType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the syncType property value. The syncType property
     *  @param DeviceManagementExchangeConnectorSyncType|null $value Value to set for the syncType property.
    */
    public function setSyncType(?DeviceManagementExchangeConnectorSyncType $value ): void {
        $this->syncType = $value;
    }

}