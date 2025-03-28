<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncSupplierItem.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncLogisticsSupplierItem
 *
 * @property int $Timestamp Timestamp
 * @property string $Barcode This is the barcode for the unit other than standard unit of the item. Only supported by the Premium for Wholesale & Distribution and Manufacturing
 * @property int $CopyRemarks Copy purchase remarks to purchase lines
 * @property string $CountryOfOrigin Country of origin code
 * @property string $CountryOfOriginDescription Description of country of origin
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency of item price
 * @property string $CurrencyDescription Description of currency of item price
 * @property int $Division Division code
 * @property int $DropShipment Indicates that the supplier will deliver the item directly to customer. Values: 0 = No, 1 = Yes, 2 = Optional
 * @property string $EndDate Together with StartDate this determines whether the price is active
 * @property string $ID Primary key
 * @property string $Item Item ID
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of Item
 * @property string $ItemUnit Item Unit
 * @property string $ItemUnitCode Item Unit Code
 * @property string $ItemUnitDescription Item Unit Description
 * @property bool $MainSupplier Indicates this is a main supplier
 * @property float $MinimumQuantity Minimum quantity of the item for purchase, only available for Wholesale & Distribution (Professional and Premium only)
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 * @property int $PurchaseLeadTime The number of days between placing an order with a supplier and receiving items from the supplier
 * @property int $PurchaseLotSize Lot size of the item for purchase, only available for Wholesale & Distribution (Premium only)
 * @property float $PurchasePrice Purchase price. If neither active nor future price exists, it shows 0 when GET
 * @property string $PurchaseUnit Unit code
 * @property string $PurchaseUnitDescription Description of unit
 * @property float $PurchaseUnitFactor This is the multiplication factor when going from default item unit to the unit of this price
 * @property string $PurchaseVATCode VAT code
 * @property string $PurchaseVATCodeDescription Description of VAT
 * @property string $StartDate Together with EndDate this determines whether the price is active
 * @property string $Supplier Supplier ID
 * @property string $SupplierCode Supplier code
 * @property string $SupplierDescription Description of supplier
 * @property string $SupplierItemCode Supplier's item code
 */
class SyncSupplierItem extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Barcode',
        'CopyRemarks',
        'CountryOfOrigin',
        'CountryOfOriginDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'CurrencyDescription',
        'Division',
        'DropShipment',
        'EndDate',
        'ID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemUnit',
        'ItemUnitCode',
        'ItemUnitDescription',
        'MainSupplier',
        'MinimumQuantity',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PurchaseLeadTime',
        'PurchaseLotSize',
        'PurchasePrice',
        'PurchaseUnit',
        'PurchaseUnitDescription',
        'PurchaseUnitFactor',
        'PurchaseVATCode',
        'PurchaseVATCodeDescription',
        'StartDate',
        'Supplier',
        'SupplierCode',
        'SupplierDescription',
        'SupplierItemCode',
    ];

    protected $url = 'sync/Logistics/SupplierItem';
}
