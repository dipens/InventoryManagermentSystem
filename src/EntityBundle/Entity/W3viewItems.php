<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * W3viewItems *
 * @ORM\Table(name="W3viewItems")
 * @ORM\Entity()
 */
class W3viewItems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="LocPK", type="integer", nullable=false)
     */

    private $LocPK;
    /**
     * @var integer
     * @ORM\Column(name="IPK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $IPK;
    /**
     * @var string
     *
     * @ORM\Column(name="IItemNumID", type="string", length=30, nullable=false)
     */

    private $IItemNumID;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IIsKit", type="boolean", nullable=false)
     */

    private $IIsKit;
    /**
     * @var integer
     *
     * @ORM\Column(name="VPK", type="integer")
     */

    private $VPK;
    /**
     * @var string
     *
     * @ORM\Column(name="IVendorNumID", type="string", length=10)
     */

    private $IVendorNumID;
    /**
     * @var string
     *
     * @ORM\Column(name="ISort", type="string", length=50)
     */

    private $ISort;
    /**
     * @var string
     *
     * @ORM\Column(name="IDesc1", type="string", length=50)
     */

    private $IDesc1;
    /**
     * @var string
     *
     * @ORM\Column(name="IDesc2", type="string", length=50)
     */

    private $IDesc2;
    /**
     * @var string
     *
     * @ORM\Column(name="IVendorItemNum", type="string", length=50)
     */

    private $IVendorItemNum;
    /**
     * @var string
     *
     * @ORM\Column(name="IReportDec", type="string", length=50)
     */

    private $IReportDec;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IStocked", type="boolean", nullable=false)
     */

    private $IStocked;
    /**
     * @var string
     *
     * @ORM\Column(name="IStatus", type="string", length=1)
     */

    private $IStatus;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IControlled", type="boolean", nullable=false)
     */

    private $IControlled;
    /**
     * @var string
     *
     * @ORM\Column(name="IUOMCode", type="string", length=30)
     */

    private $IUOMCode;
    /**
     * @var string
     *
     * @ORM\Column(name="IDesc3", type="string", length=50)
     */

    private $IDesc3;
    /**
     * @var integer
     *
     * @ORM\Column(name="IOnHandTotal", type="integer", nullable=false)
     */

    private $IOnHandTotal;
    /**
     * @var integer
     *
     * @ORM\Column(name="IOnHandAvailable", type="integer", nullable=false)
     */

    private $IOnHandAvailable;
    /**
     * @var integer
     *
     * @ORM\Column(name="IOnHandAllocated", type="integer", nullable=false)
     */

    private $IOnHandAllocated;
    /**
     * @var integer
     *
     * @ORM\Column(name="IOnOrderAvailable", type="integer", nullable=false)
     */

    private $IOnOrderAvailable;
    /**
     * @var string
     *
     * @ORM\Column(name="IHSFinish", type="string", length=30)
     */

    private $IHSFinish;
    /**
     * @var integer
     *
     * @ORM\Column(name="IHSQty", type="integer")
     */

    private $IHSQty;
    /**
     * @var boolean
     *
     * @ORM\Column(name="ILabel", type="boolean", nullable=false)
     */

    private $ILabel;
    /**
     * @var integer
     *
     * @ORM\Column(name="INumPerLabel", type="integer")
     */

    private $INumPerLabel;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="ILastUpdated", type="datetime")
     */

    private $ILastUpdated;
    /**
     * @var integer
     *
     * @ORM\Column(name="IPrintGroup", type="integer")
     */

    private $IPrintGroup;
    /**
     * @var string
     *
     * @ORM\Column(name="IPriceGroup", type="string", length=30)
     */

    private $IPriceGroup;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IIsGST", type="boolean", nullable=false)
     */

    private $IIsGST;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IIsPST", type="boolean", nullable=false)
     */

    private $IIsPST;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IIsHST", type="boolean", nullable=false)
     */

    private $IIsHST;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IVendorItemNumChecked", type="boolean", nullable=false)
     */

    private $IVendorItemNumChecked;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IVendorNumIDChecked", type="boolean", nullable=false)
     */

    private $IVendorNumIDChecked;
    /**
     * @var boolean
     *
     * @ORM\Column(name="ILeadTimeChecked", type="boolean", nullable=false)
     */

    private $ILeadTimeChecked;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IVendorPriceChecked", type="boolean", nullable=false)
     */

    private $IVendorPriceChecked;
    /**
     * @var string
     *
     * @ORM\Column(name="IGLRevenueAcctNum", type="string", length=5)
     */

    private $IGLRevenueAcctNum;
    /**
     * @var string
     *
     * @ORM\Column(name="IGLCostAcctNum", type="string", length=5)
     */

    private $IGLCostAcctNum;
    /**
     * @var string
     *
     * @ORM\Column(name="IGLInventoryAcctNum", type="string", length=5)
     */

    private $IGLInventoryAcctNum;
    /**
     * @var string
     *
     * @ORM\Column(name="IGLPstCostAcctNum", type="string", length=5)
     */

    private $IGLPstCostAcctNum;
    /**
     * @var string
     *
     * @ORM\Column(name="IFOBLocation", type="string", length=50)
     */

    private $IFOBLocation;
    /**
     * @var string
     *
     * @ORM\Column(name="IFOBListPrice", type="string")
     */

    private $IFOBListPrice;
    /**
     * @var string
     *
     * @ORM\Column(name="IFOBDiscount", type="string", length=20)
     */

    private $IFOBDiscount;
    /**
     * @var string
     *
     * @ORM\Column(name="IFOBCost", type="string")
     */

    private $IFOBCost;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IFreightIndexPercent", type="boolean", nullable=false)
     */

    private $IFreightIndexPercent;
    /**
     * @var string
     *
     * @ORM\Column(name="IFreightCost", type="string", nullable=false)
     */

    private $IFreightCost;
    /**
     * @var float
     *
     * @ORM\Column(name="IFreightPercent", type="float", nullable=false)
     */

    private $IFreightPercent;
    /**
     * @var string
     *
     * @ORM\Column(name="ICurrency", type="string", length=50)
     */

    private $ICurrency;
    /**
     * @var float
     *
     * @ORM\Column(name="IExchange", type="float")
     */

    private $IExchange;
    /**
     * @var float
     *
     * @ORM\Column(name="IDuty", type="float")
     */

    private $IDuty;
    /**
     * @var float
     *
     * @ORM\Column(name="IBrokerage", type="float")
     */

    private $IBrokerage;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IMiscIndexPercent", type="boolean", nullable=false)
     */

    private $IMiscIndexPercent;
    /**
     * @var string
     *
     * @ORM\Column(name="IMiscCost", type="string")
     */

    private $IMiscCost;
    /**
     * @var float
     *
     * @ORM\Column(name="IMiscPercent", type="float")
     */

    private $IMiscPercent;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IAutoUp", type="boolean", nullable=false)
     */

    private $IAutoUp;
    /**
     * @var integer
     *
     * @ORM\Column(name="IOrderMultiple", type="integer", nullable=false)
     */

    private $IOrderMultiple;
    /**
     * @var integer
     *
     * @ORM\Column(name="IReOrderPoint", type="integer", nullable=false)
     */

    private $IReOrderPoint;
    /**
     * @var integer
     *
     * @ORM\Column(name="IReOrderQty", type="integer", nullable=false)
     */

    private $IReOrderQty;
    /**
     * @var integer
     *
     * @ORM\Column(name="IminOrderQty", type="integer", nullable=false)
     */

    private $IminOrderQty;
    /**
     * @var integer
     *
     * @ORM\Column(name="ILeadTime", type="integer", nullable=false)
     */

    private $ILeadTime;
    /**
     * @var string
     *
     * @ORM\Column(name="IBinNum", type="string", length=50)
     */

    private $IBinNum;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="ICounted", type="datetime")
     */

    private $ICounted;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="IPriceDate", type="datetime", nullable=false)
     */

    private $IPriceDate;
    /**
     * @var string
     *
     * @ORM\Column(name="IListPrice", type="string", nullable=false)
     */

    private $IListPrice;
    /**
     * @var string
     *
     * @ORM\Column(name="IStandardCost", type="string", nullable=false)
     */

    private $IStandardCost;
    /**
     * @var string
     *
     * @ORM\Column(name="IDiscountCode", type="string", length=50)
     */

    private $IDiscountCode;
    /**
     * @var float
     *
     * @ORM\Column(name="IDiscountNum", type="float")
     */

    private $IDiscountNum;
    /**
     * @var float
     *
     * @ORM\Column(name="FrameLabourHour", type="float", nullable=false)
     */

    private $FrameLabourHour;
    /**
     * @var float
     *
     * @ORM\Column(name="FrameLabourRate", type="float", nullable=false)
     */

    private $FrameLabourRate;
    /**
     * @var string
     *
     * @ORM\Column(name="FrameLabourCost", type="string", nullable=false)
     */

    private $FrameLabourCost;
    /**
     * @var string
     *
     * @ORM\Column(name="FrameComponentTotalListPrice", type="string", nullable=false)
     */

    private $FrameComponentTotalListPrice;
    /**
     * @var string
     *
     * @ORM\Column(name="FrameComponenTotalCost", type="string", nullable=false)
     */

    private $FrameComponenTotalCost;
    /**
     * @var string
     *
     * @ORM\Column(name="INote1", type="string", length=250)
     */

    private $INote1;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IPrintOnPO1", type="boolean", nullable=false)
     */

    private $IPrintOnPO1;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IPrintOnQuote1", type="boolean", nullable=false)
     */

    private $IPrintOnQuote1;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IPrintOnSO1", type="boolean", nullable=false)
     */

    private $IPrintOnSO1;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IPrintOnInvoice1", type="boolean", nullable=false)
     */

    private $IPrintOnInvoice1;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IPrintOnPickingSlip1", type="boolean", nullable=false)
     */

    private $IPrintOnPickingSlip1;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IPrintOnPackingSlip1", type="boolean", nullable=false)
     */

    private $IPrintOnPackingSlip1;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IPrintOnHWSchedule1", type="boolean", nullable=false)
     */

    private $IPrintOnHWSchedule1;
    /**
     * @var string
     *
     * @ORM\Column(name="INote2", type="string", length=250)
     */

    private $INote2;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IPrintOnPO2", type="boolean", nullable=false)
     */

    private $IPrintOnPO2;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IPrintOnQuote2", type="boolean", nullable=false)
     */

    private $IPrintOnQuote2;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IPrintOnSO2", type="boolean", nullable=false)
     */

    private $IPrintOnSO2;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IPrintOnInvoice2", type="boolean", nullable=false)
     */

    private $IPrintOnInvoice2;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IPrintOnPickingSlip2", type="boolean", nullable=false)
     */

    private $IPrintOnPickingSlip2;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IPrintOnPackingSlip2", type="boolean", nullable=false)
     */

    private $IPrintOnPackingSlip2;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IPrintOnHWSchedule2", type="boolean", nullable=false)
     */

    private $IPrintOnHWSchedule2;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IIsMiscellaneous", type="boolean", nullable=false)
     */

    private $IIsMiscellaneous;
    /**
     * @var string
     *
     * @ORM\Column(name="IItemType", type="string", length=1)
     */

    private $IItemType;
    /**
     * @var string
     *
     * @ORM\Column(name="ICategoryID", type="string", length=3)
     */

    private $ICategoryID;
    /**
     * @var string
     *
     * @ORM\Column(name="ICategoryName", type="string", length=50)
     */

    private $ICategoryName;
    /**
     * @var string
     *
     * @ORM\Column(name="IListPriceOld", type="string")
     */

    private $IListPriceOld;
    /**
     * @var string
     *
     * @ORM\Column(name="IDiscountCodeOld", type="string", length=50)
     */

    private $IDiscountCodeOld;
    /**
     * @var string
     *
     * @ORM\Column(name="IStandardCostOld", type="string")
     */

    private $IStandardCostOld;
    /**
     * @var float
     *
     * @ORM\Column(name="IDiscountNumOld", type="float")
     */

    private $IDiscountNumOld;
    /**
     * @var string
     *
     * @ORM\Column(name="IEmployee", type="string", length=10)
     */

    private $IEmployee;
    /**
     * @var boolean
     *
     * @ORM\Column(name="ILabourChecked", type="boolean", nullable=false)
     */

    private $ILabourChecked;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IKeyedProduct", type="boolean", nullable=false)
     */

    private $IKeyedProduct;
    /**
     * @var string
     *
     * @ORM\Column(name="IProductLine", type="string", length=50)
     */

    private $IProductLine;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="IDateCreated", type="datetime", nullable=false)
     */

    private $IDateCreated;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="IDateUpdated", type="datetime", nullable=false)
     */

    private $IDateUpdated;
    /**
     * @var string
     *
     * @ORM\Column(name="ICreatedSysUser", type="string", length=50, nullable=false)
     */

    private $ICreatedSysUser;
    /**
     * @var string
     *
     * @ORM\Column(name="IUpdatedSysUser", type="string", length=50, nullable=false)
     */

    private $IUpdatedSysUser;
    /**
     * @var string
     *
     * @ORM\Column(name="IListPricePending", type="string")
     */

    private $IListPricePending;
    /**
     * @var string
     *
     * @ORM\Column(name="IStandardCostPending", type="string")
     */

    private $IStandardCostPending;
    /**
     * @var string
     *
     * @ORM\Column(name="IDiscountCodePending", type="string", length=50)
     */

    private $IDiscountCodePending;
    /**
     * @var float
     *
     * @ORM\Column(name="IDiscountNumPending", type="float")
     */

    private $IDiscountNumPending;
    /**
     * @var float
     *
     * @ORM\Column(name="ILabourHourPending", type="float")
     */

    private $ILabourHourPending;
    /**
     * @var string
     *
     * @ORM\Column(name="ILabourRatePending", type="string")
     */

    private $ILabourRatePending;
    /**
     * @var string
     *
     * @ORM\Column(name="ILabourCostPending", type="string")
     */

    private $ILabourCostPending;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="IPriceDatePending", type="datetime")
     */

    private $IPriceDatePending;
    /**
     * @var integer
     *
     * @ORM\Column(name="ILeadTimePending", type="integer")
     */

    private $ILeadTimePending;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IDiscontinued", type="boolean", nullable=false)
     */

    private $IDiscontinued;
    /**
     * @var boolean
     *
     * @ORM\Column(name="ILinkHasFiles", type="boolean", nullable=false)
     */

    private $ILinkHasFiles;
    /**
     * @var string
     *
     * @ORM\Column(name="IVendorItemNumCheckedBy", type="string", length=50)
     */

    private $IVendorItemNumCheckedBy;
    /**
     * @var string
     *
     * @ORM\Column(name="IVendorNumIDCheckedBy", type="string", length=50)
     */

    private $IVendorNumIDCheckedBy;
    /**
     * @var string
     *
     * @ORM\Column(name="ILeadTimeCheckedBy", type="string", length=50)
     */

    private $ILeadTimeCheckedBy;
    /**
     * @var string
     *
     * @ORM\Column(name="IVendorPriceCheckedBy", type="string", length=50)
     */

    private $IVendorPriceCheckedBy;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="IVendorItemNumCheckedDate", type="datetime")
     */

    private $IVendorItemNumCheckedDate;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="IVendorNumIDCheckedDate", type="datetime")
     */

    private $IVendorNumIDCheckedDate;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="ILeadTimeCheckedDate", type="datetime")
     */

    private $ILeadTimeCheckedDate;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="IVendorPriceCheckedDate", type="datetime")
     */

    private $IVendorPriceCheckedDate;
    /**
     * @var string
     *
     * @ORM\Column(name="ILabourCheckedBy", type="string", length=50)
     */

    private $ILabourCheckedBy;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="ILabourCheckedDate", type="datetime")
     */

    private $ILabourCheckedDate;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IisIntangible", type="boolean", nullable=false)
     */

    private $IisIntangible;
    /**
     * @var boolean
     *
     * @ORM\Column(name="IisEngineered", type="boolean", nullable=false)
     */

    private $IisEngineered;
    /**
     * @var string
     *
     * @ORM\Column(name="IMATERIAL", type="string", length=5)
     */

    private $IMATERIAL;
    /**
     * @var string
     *
     * @ORM\Column(name="IREBATEWIDTH", type="string", length=10)
     */

    private $IREBATEWIDTH;
    /**
     * @var string
     *
     * @ORM\Column(name="IREBATEHEIGHT", type="string", length=10)
     */

    private $IREBATEHEIGHT;
    /**
     * @var string
     *
     * @ORM\Column(name="ISIDELITE", type="string", length=10)
     */

    private $ISIDELITE;
    /**
     * @var string
     *
     * @ORM\Column(name="IGAUGE", type="string", length=5)
     */

    private $IGAUGE;
    /**
     * @var string
     *
     * @ORM\Column(name="ITHROAT", type="string", length=10)
     */

    private $ITHROAT;
    /**
     * @var string
     *
     * @ORM\Column(name="IANCHOR", type="string", length=20)
     */

    private $IANCHOR;
    /**
     * @var string
     *
     * @ORM\Column(name="ISTRIKEPREP", type="string", length=10)
     */

    private $ISTRIKEPREP;
    /**
     * @var string
     *
     * @ORM\Column(name="IFIRELABEL", type="string", length=30)
     */

    private $IFIRELABEL;
    /**
     * @var string
     *
     * @ORM\Column(name="IPREPNOTE", type="string", length=1000)
     */

    private $IPREPNOTE;
    /**
     * @var string
     *
     * @ORM\Column(name="IDWidthCode", type="string", length=30)
     */

    private $IDWidthCode;
    /**
     * @var string
     *
     * @ORM\Column(name="IDHeightCode", type="string", length=30)
     */

    private $IDHeightCode;
    /**
     * @var string
     *
     * @ORM\Column(name="IDLOCKPREP", type="string", length=20)
     */

    private $IDLOCKPREP;
    /**
     * @var string
     *
     * @ORM\Column(name="IHANDINGNUM", type="string", length=15)
     */

    private $IHANDINGNUM;
    /**
     * @var string
     *
     * @ORM\Column(name="IFSC", type="string", length=50)
     */

    private $IFSC;
    /**
     * @var integer
     *
     * @ORM\Column(name="IRefSource", type="integer")
     */

    private $IRefSource;
    /**
     * @var integer
     *
     * @ORM\Column(name="IRefID", type="integer")
     */

    private $IRefID;
    /**
     * @var string
     *
     * @ORM\Column(name="IScratchPads", type="string", length=-1)
     */

    private $IScratchPads;
    /**
     * @var integer
     *
     * @ORM\Column(name="IWorkStatus", type="integer")
     */

    private $IWorkStatus;
    /**
     * @var string
     *
     * @ORM\Column(name="IWorkNote", type="string", length=1024)
     */

    private $IWorkNote;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="IWorkDateIssued", type="datetime")
     */

    private $IWorkDateIssued;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="IWorkDateAccepted", type="datetime")
     */

    private $IWorkDateAccepted;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="IWorkDateCompleted", type="datetime")
     */

    private $IWorkDateCompleted;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="IWorkDateShipped", type="datetime")
     */

    private $IWorkDateShipped;
    /**
     * @var integer
     *
     * @ORM\Column(name="ICreatedSysUserPK", type="integer")
     */

    private $ICreatedSysUserPK;
    /**
     * @var integer
     *
     * @ORM\Column(name="ILinkedPK", type="integer")
     */

    private $ILinkedPK;
    /**
     * @var string
     *
     * @ORM\Column(name="IVendorPriceCheckedByOld", type="string", length=50)
     */

    private $IVendorPriceCheckedByOld;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="IVendorPriceCheckedDateOld", type="datetime")
     */

    private $IVendorPriceCheckedDateOld;
    /**
     * @var string
     *
     * @ORM\Column(name="VVendorNumID", type="string", length=10)
     */

    private $VVendorNumID;
    /**
     * @var string
     *
     * @ORM\Column(name="VName", type="string", length=50)
     */

    private $VName;
    /**
     * @var string
     *
     * @ORM\Column(name="ILinkedNumID", type="string", length=31)
     */

    private $ILinkedNumID;
    /**
     * @var integer
     *
     * @ORM\Column(name="RClosingBalance", type="integer")
     */

    private $RClosingBalance;
    /**
     * @var integer
     *
     * @ORM\Column(name="RBalanceActual", type="integer")
     */

    private $RBalanceActual;
    /**
     * @var string
     *
     * @ORM\Column(name="INote1Fake", type="string", length=250)
     */

    private $INote1Fake;
    /**
     * @var string
     *
     * @ORM\Column(name="ICreatedSysUserFake", type="string", length=50, nullable=false)
     */

    private $ICreatedSysUserFake;
    /**
     * @var string
     *
     * @ORM\Column(name="ICategoryIDFake", type="string", length=3)
     */

    private $ICategoryIDFake;
    /**
     * @var integer
     *
     * @ORM\Column(name="IWorkStatusFake", type="integer")
     */

    private $IWorkStatusFake;
    /**
     * @var string
     *
     * @ORM\Column(name="IScratchPadsFake", type="string", length=-1)
     */

    private $IScratchPadsFake;
    /**
     * @var string
     *
     * @ORM\Column(name="IVendorPriceCheckedByFake", type="string", length=50)
     */

    private $IVendorPriceCheckedByFake;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="IVendorPriceCheckedDateFake", type="datetime")
     */

    private $IVendorPriceCheckedDateFake;
    /**
     * @var string
     *
     * @ORM\Column(name="IUpdatedSysUserFake", type="string", length=50, nullable=false)
     */

    private $IUpdatedSysUserFake;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="IDateUpdatedFake", type="datetime")
     */

    private $IDateUpdatedFake;
    /**
     * @var integer
     *
     * @ORM\Column(name="ILeadTimeFake", type="integer", nullable=false)
     */

    private $ILeadTimeFake;
    /**
     * @var boolean
     *
     * @ORM\Column(name="VConsiderVendor", type="boolean", nullable=false)
     */

    private $VConsiderVendor;
    /**
     * @var string
     *
     * @ORM\Column(name="IStockedLevel", type="string", length=50, nullable=false)
     */

    private $IStockedLevel;
    /**
     * @var string
     *
     * @ORM\Column(name="ConPK", type="string", length=3, nullable=false)
     */

    private $ConPK;

    /**
     * @return integer
     */

    public function getLocPK()
    {
        return $this->LocPK;
    }

    /**
     * @param integer $LocPK
     */
    public function setLocPK($LocPK)
    {
        $this->LocPK=$LocPK;
    }
    /**
     * @return integer
     */
    public function getIPK()
    {
        return $this->IPK;
    }

    /**
     * @param integer $IPK
     */
    public function setIPK($IPK)
    {
        $this->IPK=$IPK;
    }
    /**
     * @return string
     */
    public function getIItemNumID()
    {
        return $this->IItemNumID;
    }

    /**
     * @param string $IItemNumID
     */
    public function setIItemNumID($IItemNumID)
    {
        $this->IItemNumID=$IItemNumID;
    }
    /**
     * @return boolean
     */
    public function getIIsKit()
    {
        return $this->IIsKit;
    }

    /**
     * @param boolean $IIsKit
     */
    public function setIIsKit($IIsKit)
    {
        $this->IIsKit=$IIsKit;
    }
    /**
     * @return integer
     */
    public function getVPK()
    {
        return $this->VPK;
    }

    /**
     * @param integer $VPK
     */
    public function setVPK($VPK)
    {
        $this->VPK=$VPK;
    }
    /**
     * @return string
     */
    public function getIVendorNumID()
    {
        return $this->IVendorNumID;
    }

    /**
     * @param string $IVendorNumID
     */
    public function setIVendorNumID($IVendorNumID)
    {
        $this->IVendorNumID=$IVendorNumID;
    }
    /**
     * @return string
     */
    public function getISort()
    {
        return $this->ISort;
    }

    /**
     * @param string $ISort
     */
    public function setISort($ISort)
    {
        $this->ISort=$ISort;
    }
    /**
     * @return string
     */
    public function getIDesc1()
    {
        return $this->IDesc1;
    }

    /**
     * @param string $IDesc1
     */
    public function setIDesc1($IDesc1)
    {
        $this->IDesc1=$IDesc1;
    }
    /**
     * @return string
     */
    public function getIDesc2()
    {
        return $this->IDesc2;
    }

    /**
     * @param string $IDesc2
     */
    public function setIDesc2($IDesc2)
    {
        $this->IDesc2=$IDesc2;
    }
    /**
     * @return string
     */
    public function getIVendorItemNum()
    {
        return $this->IVendorItemNum;
    }

    /**
     * @param string $IVendorItemNum
     */
    public function setIVendorItemNum($IVendorItemNum)
    {
        $this->IVendorItemNum=$IVendorItemNum;
    }
    /**
     * @return string
     */
    public function getIReportDec()
    {
        return $this->IReportDec;
    }

    /**
     * @param string $IReportDec
     */
    public function setIReportDec($IReportDec)
    {
        $this->IReportDec=$IReportDec;
    }
    /**
     * @return boolean
     */
    public function getIStocked()
    {
        return $this->IStocked;
    }

    /**
     * @param boolean $IStocked
     */
    public function setIStocked($IStocked)
    {
        $this->IStocked=$IStocked;
    }
    /**
     * @return string
     */
    public function getIStatus()
    {
        return $this->IStatus;
    }

    /**
     * @param string $IStatus
     */
    public function setIStatus($IStatus)
    {
        $this->IStatus=$IStatus;
    }
    /**
     * @return boolean
     */
    public function getIControlled()
    {
        return $this->IControlled;
    }

    /**
     * @param boolean $IControlled
     */
    public function setIControlled($IControlled)
    {
        $this->IControlled=$IControlled;
    }
    /**
     * @return string
     */
    public function getIUOMCode()
    {
        return $this->IUOMCode;
    }

    /**
     * @param string $IUOMCode
     */
    public function setIUOMCode($IUOMCode)
    {
        $this->IUOMCode=$IUOMCode;
    }
    /**
     * @return string
     */
    public function getIDesc3()
    {
        return $this->IDesc3;
    }

    /**
     * @param string $IDesc3
     */
    public function setIDesc3($IDesc3)
    {
        $this->IDesc3=$IDesc3;
    }
    /**
     * @return integer
     */
    public function getIOnHandTotal()
    {
        return $this->IOnHandTotal;
    }

    /**
     * @param integer $IOnHandTotal
     */
    public function setIOnHandTotal($IOnHandTotal)
    {
        $this->IOnHandTotal=$IOnHandTotal;
    }
    /**
     * @return integer
     */
    public function getIOnHandAvailable()
    {
        return $this->IOnHandAvailable;
    }

    /**
     * @param integer $IOnHandAvailable
     */
    public function setIOnHandAvailable($IOnHandAvailable)
    {
        $this->IOnHandAvailable=$IOnHandAvailable;
    }
    /**
     * @return integer
     */
    public function getIOnHandAllocated()
    {
        return $this->IOnHandAllocated;
    }

    /**
     * @param integer $IOnHandAllocated
     */
    public function setIOnHandAllocated($IOnHandAllocated)
    {
        $this->IOnHandAllocated=$IOnHandAllocated;
    }
    /**
     * @return integer
     */
    public function getIOnOrderAvailable()
    {
        return $this->IOnOrderAvailable;
    }

    /**
     * @param integer $IOnOrderAvailable
     */
    public function setIOnOrderAvailable($IOnOrderAvailable)
    {
        $this->IOnOrderAvailable=$IOnOrderAvailable;
    }
    /**
     * @return string
     */
    public function getIHSFinish()
    {
        return $this->IHSFinish;
    }

    /**
     * @param string $IHSFinish
     */
    public function setIHSFinish($IHSFinish)
    {
        $this->IHSFinish=$IHSFinish;
    }
    /**
     * @return integer
     */
    public function getIHSQty()
    {
        return $this->IHSQty;
    }

    /**
     * @param integer $IHSQty
     */
    public function setIHSQty($IHSQty)
    {
        $this->IHSQty=$IHSQty;
    }
    /**
     * @return boolean
     */
    public function getILabel()
    {
        return $this->ILabel;
    }

    /**
     * @param boolean $ILabel
     */
    public function setILabel($ILabel)
    {
        $this->ILabel=$ILabel;
    }
    /**
     * @return integer
     */
    public function getINumPerLabel()
    {
        return $this->INumPerLabel;
    }

    /**
     * @param integer $INumPerLabel
     */
    public function setINumPerLabel($INumPerLabel)
    {
        $this->INumPerLabel=$INumPerLabel;
    }
    /**
     * @return \datetime
     */
    public function getILastUpdated()
    {
        return $this->ILastUpdated;
    }

    /**
     * @param \datetime $ILastUpdated
     */
    public function setILastUpdated($ILastUpdated)
    {
        $this->ILastUpdated=$ILastUpdated;
    }
    /**
     * @return integer
     */
    public function getIPrintGroup()
    {
        return $this->IPrintGroup;
    }

    /**
     * @param integer $IPrintGroup
     */
    public function setIPrintGroup($IPrintGroup)
    {
        $this->IPrintGroup=$IPrintGroup;
    }
    /**
     * @return string
     */
    public function getIPriceGroup()
    {
        return $this->IPriceGroup;
    }

    /**
     * @param string $IPriceGroup
     */
    public function setIPriceGroup($IPriceGroup)
    {
        $this->IPriceGroup=$IPriceGroup;
    }
    /**
     * @return boolean
     */
    public function getIIsGST()
    {
        return $this->IIsGST;
    }

    /**
     * @param boolean $IIsGST
     */
    public function setIIsGST($IIsGST)
    {
        $this->IIsGST=$IIsGST;
    }
    /**
     * @return boolean
     */
    public function getIIsPST()
    {
        return $this->IIsPST;
    }

    /**
     * @param boolean $IIsPST
     */
    public function setIIsPST($IIsPST)
    {
        $this->IIsPST=$IIsPST;
    }
    /**
     * @return boolean
     */
    public function getIIsHST()
    {
        return $this->IIsHST;
    }

    /**
     * @param boolean $IIsHST
     */
    public function setIIsHST($IIsHST)
    {
        $this->IIsHST=$IIsHST;
    }
    /**
     * @return boolean
     */
    public function getIVendorItemNumChecked()
    {
        return $this->IVendorItemNumChecked;
    }

    /**
     * @param boolean $IVendorItemNumChecked
     */
    public function setIVendorItemNumChecked($IVendorItemNumChecked)
    {
        $this->IVendorItemNumChecked=$IVendorItemNumChecked;
    }
    /**
     * @return boolean
     */
    public function getIVendorNumIDChecked()
    {
        return $this->IVendorNumIDChecked;
    }

    /**
     * @param boolean $IVendorNumIDChecked
     */
    public function setIVendorNumIDChecked($IVendorNumIDChecked)
    {
        $this->IVendorNumIDChecked=$IVendorNumIDChecked;
    }
    /**
     * @return boolean
     */
    public function getILeadTimeChecked()
    {
        return $this->ILeadTimeChecked;
    }

    /**
     * @param boolean $ILeadTimeChecked
     */
    public function setILeadTimeChecked($ILeadTimeChecked)
    {
        $this->ILeadTimeChecked=$ILeadTimeChecked;
    }
    /**
     * @return boolean
     */
    public function getIVendorPriceChecked()
    {
        return $this->IVendorPriceChecked;
    }

    /**
     * @param boolean $IVendorPriceChecked
     */
    public function setIVendorPriceChecked($IVendorPriceChecked)
    {
        $this->IVendorPriceChecked=$IVendorPriceChecked;
    }
    /**
     * @return string
     */
    public function getIGLRevenueAcctNum()
    {
        return $this->IGLRevenueAcctNum;
    }

    /**
     * @param string $IGLRevenueAcctNum
     */
    public function setIGLRevenueAcctNum($IGLRevenueAcctNum)
    {
        $this->IGLRevenueAcctNum=$IGLRevenueAcctNum;
    }
    /**
     * @return string
     */
    public function getIGLCostAcctNum()
    {
        return $this->IGLCostAcctNum;
    }

    /**
     * @param string $IGLCostAcctNum
     */
    public function setIGLCostAcctNum($IGLCostAcctNum)
    {
        $this->IGLCostAcctNum=$IGLCostAcctNum;
    }
    /**
     * @return string
     */
    public function getIGLInventoryAcctNum()
    {
        return $this->IGLInventoryAcctNum;
    }

    /**
     * @param string $IGLInventoryAcctNum
     */
    public function setIGLInventoryAcctNum($IGLInventoryAcctNum)
    {
        $this->IGLInventoryAcctNum=$IGLInventoryAcctNum;
    }
    /**
     * @return string
     */
    public function getIGLPstCostAcctNum()
    {
        return $this->IGLPstCostAcctNum;
    }

    /**
     * @param string $IGLPstCostAcctNum
     */
    public function setIGLPstCostAcctNum($IGLPstCostAcctNum)
    {
        $this->IGLPstCostAcctNum=$IGLPstCostAcctNum;
    }
    /**
     * @return string
     */
    public function getIFOBLocation()
    {
        return $this->IFOBLocation;
    }

    /**
     * @param string $IFOBLocation
     */
    public function setIFOBLocation($IFOBLocation)
    {
        $this->IFOBLocation=$IFOBLocation;
    }
    /**
     * @return string
     */
    public function getIFOBListPrice()
    {
        return $this->IFOBListPrice;
    }

    /**
     * @param string $IFOBListPrice
     */
    public function setIFOBListPrice($IFOBListPrice)
    {
        $this->IFOBListPrice=$IFOBListPrice;
    }
    /**
     * @return string
     */
    public function getIFOBDiscount()
    {
        return $this->IFOBDiscount;
    }

    /**
     * @param string $IFOBDiscount
     */
    public function setIFOBDiscount($IFOBDiscount)
    {
        $this->IFOBDiscount=$IFOBDiscount;
    }
    /**
     * @return string
     */
    public function getIFOBCost()
    {
        return $this->IFOBCost;
    }

    /**
     * @param string $IFOBCost
     */
    public function setIFOBCost($IFOBCost)
    {
        $this->IFOBCost=$IFOBCost;
    }
    /**
     * @return boolean
     */
    public function getIFreightIndexPercent()
    {
        return $this->IFreightIndexPercent;
    }

    /**
     * @param boolean $IFreightIndexPercent
     */
    public function setIFreightIndexPercent($IFreightIndexPercent)
    {
        $this->IFreightIndexPercent=$IFreightIndexPercent;
    }
    /**
     * @return string
     */
    public function getIFreightCost()
    {
        return $this->IFreightCost;
    }

    /**
     * @param string $IFreightCost
     */
    public function setIFreightCost($IFreightCost)
    {
        $this->IFreightCost=$IFreightCost;
    }
    /**
     * @return float
     */
    public function getIFreightPercent()
    {
        return $this->IFreightPercent;
    }

    /**
     * @param float $IFreightPercent
     */
    public function setIFreightPercent($IFreightPercent)
    {
        $this->IFreightPercent=$IFreightPercent;
    }
    /**
     * @return string
     */
    public function getICurrency()
    {
        return $this->ICurrency;
    }

    /**
     * @param string $ICurrency
     */
    public function setICurrency($ICurrency)
    {
        $this->ICurrency=$ICurrency;
    }
    /**
     * @return float
     */
    public function getIExchange()
    {
        return $this->IExchange;
    }

    /**
     * @param float $IExchange
     */
    public function setIExchange($IExchange)
    {
        $this->IExchange=$IExchange;
    }
    /**
     * @return float
     */
    public function getIDuty()
    {
        return $this->IDuty;
    }

    /**
     * @param float $IDuty
     */
    public function setIDuty($IDuty)
    {
        $this->IDuty=$IDuty;
    }
    /**
     * @return float
     */
    public function getIBrokerage()
    {
        return $this->IBrokerage;
    }

    /**
     * @param float $IBrokerage
     */
    public function setIBrokerage($IBrokerage)
    {
        $this->IBrokerage=$IBrokerage;
    }
    /**
     * @return boolean
     */
    public function getIMiscIndexPercent()
    {
        return $this->IMiscIndexPercent;
    }

    /**
     * @param boolean $IMiscIndexPercent
     */
    public function setIMiscIndexPercent($IMiscIndexPercent)
    {
        $this->IMiscIndexPercent=$IMiscIndexPercent;
    }
    /**
     * @return string
     */
    public function getIMiscCost()
    {
        return $this->IMiscCost;
    }

    /**
     * @param string $IMiscCost
     */
    public function setIMiscCost($IMiscCost)
    {
        $this->IMiscCost=$IMiscCost;
    }
    /**
     * @return float
     */
    public function getIMiscPercent()
    {
        return $this->IMiscPercent;
    }

    /**
     * @param float $IMiscPercent
     */
    public function setIMiscPercent($IMiscPercent)
    {
        $this->IMiscPercent=$IMiscPercent;
    }
    /**
     * @return boolean
     */
    public function getIAutoUp()
    {
        return $this->IAutoUp;
    }

    /**
     * @param boolean $IAutoUp
     */
    public function setIAutoUp($IAutoUp)
    {
        $this->IAutoUp=$IAutoUp;
    }
    /**
     * @return integer
     */
    public function getIOrderMultiple()
    {
        return $this->IOrderMultiple;
    }

    /**
     * @param integer $IOrderMultiple
     */
    public function setIOrderMultiple($IOrderMultiple)
    {
        $this->IOrderMultiple=$IOrderMultiple;
    }
    /**
     * @return integer
     */
    public function getIReOrderPoint()
    {
        return $this->IReOrderPoint;
    }

    /**
     * @param integer $IReOrderPoint
     */
    public function setIReOrderPoint($IReOrderPoint)
    {
        $this->IReOrderPoint=$IReOrderPoint;
    }
    /**
     * @return integer
     */
    public function getIReOrderQty()
    {
        return $this->IReOrderQty;
    }

    /**
     * @param integer $IReOrderQty
     */
    public function setIReOrderQty($IReOrderQty)
    {
        $this->IReOrderQty=$IReOrderQty;
    }
    /**
     * @return integer
     */
    public function getIminOrderQty()
    {
        return $this->IminOrderQty;
    }

    /**
     * @param integer $IminOrderQty
     */
    public function setIminOrderQty($IminOrderQty)
    {
        $this->IminOrderQty=$IminOrderQty;
    }
    /**
     * @return integer
     */
    public function getILeadTime()
    {
        return $this->ILeadTime;
    }

    /**
     * @param integer $ILeadTime
     */
    public function setILeadTime($ILeadTime)
    {
        $this->ILeadTime=$ILeadTime;
    }
    /**
     * @return string
     */
    public function getIBinNum()
    {
        return $this->IBinNum;
    }

    /**
     * @param string $IBinNum
     */
    public function setIBinNum($IBinNum)
    {
        $this->IBinNum=$IBinNum;
    }
    /**
     * @return \datetime
     */
    public function getICounted()
    {
        return $this->ICounted;
    }

    /**
     * @param \datetime $ICounted
     */
    public function setICounted($ICounted)
    {
        $this->ICounted=$ICounted;
    }
    /**
     * @return \datetime
     */
    public function getIPriceDate()
    {
        return $this->IPriceDate;
    }

    /**
     * @param \datetime $IPriceDate
     */
    public function setIPriceDate($IPriceDate)
    {
        $this->IPriceDate=$IPriceDate;
    }
    /**
     * @return string
     */
    public function getIListPrice()
    {
        return $this->IListPrice;
    }

    /**
     * @param string $IListPrice
     */
    public function setIListPrice($IListPrice)
    {
        $this->IListPrice=$IListPrice;
    }
    /**
     * @return string
     */
    public function getIStandardCost()
    {
        return $this->IStandardCost;
    }

    /**
     * @param string $IStandardCost
     */
    public function setIStandardCost($IStandardCost)
    {
        $this->IStandardCost=$IStandardCost;
    }
    /**
     * @return string
     */
    public function getIDiscountCode()
    {
        return $this->IDiscountCode;
    }

    /**
     * @param string $IDiscountCode
     */
    public function setIDiscountCode($IDiscountCode)
    {
        $this->IDiscountCode=$IDiscountCode;
    }
    /**
     * @return float
     */
    public function getIDiscountNum()
    {
        return $this->IDiscountNum;
    }

    /**
     * @param float $IDiscountNum
     */
    public function setIDiscountNum($IDiscountNum)
    {
        $this->IDiscountNum=$IDiscountNum;
    }
    /**
     * @return float
     */
    public function getFrameLabourHour()
    {
        return $this->FrameLabourHour;
    }

    /**
     * @param float $FrameLabourHour
     */
    public function setFrameLabourHour($FrameLabourHour)
    {
        $this->FrameLabourHour=$FrameLabourHour;
    }
    /**
     * @return float
     */
    public function getFrameLabourRate()
    {
        return $this->FrameLabourRate;
    }

    /**
     * @param float $FrameLabourRate
     */
    public function setFrameLabourRate($FrameLabourRate)
    {
        $this->FrameLabourRate=$FrameLabourRate;
    }
    /**
     * @return string
     */
    public function getFrameLabourCost()
    {
        return $this->FrameLabourCost;
    }

    /**
     * @param string $FrameLabourCost
     */
    public function setFrameLabourCost($FrameLabourCost)
    {
        $this->FrameLabourCost=$FrameLabourCost;
    }
    /**
     * @return string
     */
    public function getFrameComponentTotalListPrice()
    {
        return $this->FrameComponentTotalListPrice;
    }

    /**
     * @param string $FrameComponentTotalListPrice
     */
    public function setFrameComponentTotalListPrice($FrameComponentTotalListPrice)
    {
        $this->FrameComponentTotalListPrice=$FrameComponentTotalListPrice;
    }
    /**
     * @return string
     */
    public function getFrameComponenTotalCost()
    {
        return $this->FrameComponenTotalCost;
    }

    /**
     * @param string $FrameComponenTotalCost
     */
    public function setFrameComponenTotalCost($FrameComponenTotalCost)
    {
        $this->FrameComponenTotalCost=$FrameComponenTotalCost;
    }
    /**
     * @return string
     */
    public function getINote1()
    {
        return $this->INote1;
    }

    /**
     * @param string $INote1
     */
    public function setINote1($INote1)
    {
        $this->INote1=$INote1;
    }
    /**
     * @return boolean
     */
    public function getIPrintOnPO1()
    {
        return $this->IPrintOnPO1;
    }

    /**
     * @param boolean $IPrintOnPO1
     */
    public function setIPrintOnPO1($IPrintOnPO1)
    {
        $this->IPrintOnPO1=$IPrintOnPO1;
    }
    /**
     * @return boolean
     */
    public function getIPrintOnQuote1()
    {
        return $this->IPrintOnQuote1;
    }

    /**
     * @param boolean $IPrintOnQuote1
     */
    public function setIPrintOnQuote1($IPrintOnQuote1)
    {
        $this->IPrintOnQuote1=$IPrintOnQuote1;
    }
    /**
     * @return boolean
     */
    public function getIPrintOnSO1()
    {
        return $this->IPrintOnSO1;
    }

    /**
     * @param boolean $IPrintOnSO1
     */
    public function setIPrintOnSO1($IPrintOnSO1)
    {
        $this->IPrintOnSO1=$IPrintOnSO1;
    }
    /**
     * @return boolean
     */
    public function getIPrintOnInvoice1()
    {
        return $this->IPrintOnInvoice1;
    }

    /**
     * @param boolean $IPrintOnInvoice1
     */
    public function setIPrintOnInvoice1($IPrintOnInvoice1)
    {
        $this->IPrintOnInvoice1=$IPrintOnInvoice1;
    }
    /**
     * @return boolean
     */
    public function getIPrintOnPickingSlip1()
    {
        return $this->IPrintOnPickingSlip1;
    }

    /**
     * @param boolean $IPrintOnPickingSlip1
     */
    public function setIPrintOnPickingSlip1($IPrintOnPickingSlip1)
    {
        $this->IPrintOnPickingSlip1=$IPrintOnPickingSlip1;
    }
    /**
     * @return boolean
     */
    public function getIPrintOnPackingSlip1()
    {
        return $this->IPrintOnPackingSlip1;
    }

    /**
     * @param boolean $IPrintOnPackingSlip1
     */
    public function setIPrintOnPackingSlip1($IPrintOnPackingSlip1)
    {
        $this->IPrintOnPackingSlip1=$IPrintOnPackingSlip1;
    }
    /**
     * @return boolean
     */
    public function getIPrintOnHWSchedule1()
    {
        return $this->IPrintOnHWSchedule1;
    }

    /**
     * @param boolean $IPrintOnHWSchedule1
     */
    public function setIPrintOnHWSchedule1($IPrintOnHWSchedule1)
    {
        $this->IPrintOnHWSchedule1=$IPrintOnHWSchedule1;
    }
    /**
     * @return string
     */
    public function getINote2()
    {
        return $this->INote2;
    }

    /**
     * @param string $INote2
     */
    public function setINote2($INote2)
    {
        $this->INote2=$INote2;
    }
    /**
     * @return boolean
     */
    public function getIPrintOnPO2()
    {
        return $this->IPrintOnPO2;
    }

    /**
     * @param boolean $IPrintOnPO2
     */
    public function setIPrintOnPO2($IPrintOnPO2)
    {
        $this->IPrintOnPO2=$IPrintOnPO2;
    }
    /**
     * @return boolean
     */
    public function getIPrintOnQuote2()
    {
        return $this->IPrintOnQuote2;
    }

    /**
     * @param boolean $IPrintOnQuote2
     */
    public function setIPrintOnQuote2($IPrintOnQuote2)
    {
        $this->IPrintOnQuote2=$IPrintOnQuote2;
    }
    /**
     * @return boolean
     */
    public function getIPrintOnSO2()
    {
        return $this->IPrintOnSO2;
    }

    /**
     * @param boolean $IPrintOnSO2
     */
    public function setIPrintOnSO2($IPrintOnSO2)
    {
        $this->IPrintOnSO2=$IPrintOnSO2;
    }
    /**
     * @return boolean
     */
    public function getIPrintOnInvoice2()
    {
        return $this->IPrintOnInvoice2;
    }

    /**
     * @param boolean $IPrintOnInvoice2
     */
    public function setIPrintOnInvoice2($IPrintOnInvoice2)
    {
        $this->IPrintOnInvoice2=$IPrintOnInvoice2;
    }
    /**
     * @return boolean
     */
    public function getIPrintOnPickingSlip2()
    {
        return $this->IPrintOnPickingSlip2;
    }

    /**
     * @param boolean $IPrintOnPickingSlip2
     */
    public function setIPrintOnPickingSlip2($IPrintOnPickingSlip2)
    {
        $this->IPrintOnPickingSlip2=$IPrintOnPickingSlip2;
    }
    /**
     * @return boolean
     */
    public function getIPrintOnPackingSlip2()
    {
        return $this->IPrintOnPackingSlip2;
    }

    /**
     * @param boolean $IPrintOnPackingSlip2
     */
    public function setIPrintOnPackingSlip2($IPrintOnPackingSlip2)
    {
        $this->IPrintOnPackingSlip2=$IPrintOnPackingSlip2;
    }
    /**
     * @return boolean
     */
    public function getIPrintOnHWSchedule2()
    {
        return $this->IPrintOnHWSchedule2;
    }

    /**
     * @param boolean $IPrintOnHWSchedule2
     */
    public function setIPrintOnHWSchedule2($IPrintOnHWSchedule2)
    {
        $this->IPrintOnHWSchedule2=$IPrintOnHWSchedule2;
    }
    /**
     * @return boolean
     */
    public function getIIsMiscellaneous()
    {
        return $this->IIsMiscellaneous;
    }

    /**
     * @param boolean $IIsMiscellaneous
     */
    public function setIIsMiscellaneous($IIsMiscellaneous)
    {
        $this->IIsMiscellaneous=$IIsMiscellaneous;
    }
    /**
     * @return string
     */
    public function getIItemType()
    {
        return $this->IItemType;
    }

    /**
     * @param string $IItemType
     */
    public function setIItemType($IItemType)
    {
        $this->IItemType=$IItemType;
    }
    /**
     * @return string
     */
    public function getICategoryID()
    {
        return $this->ICategoryID;
    }

    /**
     * @param string $ICategoryID
     */
    public function setICategoryID($ICategoryID)
    {
        $this->ICategoryID=$ICategoryID;
    }
    /**
     * @return string
     */
    public function getICategoryName()
    {
        return $this->ICategoryName;
    }

    /**
     * @param string $ICategoryName
     */
    public function setICategoryName($ICategoryName)
    {
        $this->ICategoryName=$ICategoryName;
    }
    /**
     * @return string
     */
    public function getIListPriceOld()
    {
        return $this->IListPriceOld;
    }

    /**
     * @param string $IListPriceOld
     */
    public function setIListPriceOld($IListPriceOld)
    {
        $this->IListPriceOld=$IListPriceOld;
    }
    /**
     * @return string
     */
    public function getIDiscountCodeOld()
    {
        return $this->IDiscountCodeOld;
    }

    /**
     * @param string $IDiscountCodeOld
     */
    public function setIDiscountCodeOld($IDiscountCodeOld)
    {
        $this->IDiscountCodeOld=$IDiscountCodeOld;
    }
    /**
     * @return string
     */
    public function getIStandardCostOld()
    {
        return $this->IStandardCostOld;
    }

    /**
     * @param string $IStandardCostOld
     */
    public function setIStandardCostOld($IStandardCostOld)
    {
        $this->IStandardCostOld=$IStandardCostOld;
    }
    /**
     * @return float
     */
    public function getIDiscountNumOld()
    {
        return $this->IDiscountNumOld;
    }

    /**
     * @param float $IDiscountNumOld
     */
    public function setIDiscountNumOld($IDiscountNumOld)
    {
        $this->IDiscountNumOld=$IDiscountNumOld;
    }
    /**
     * @return string
     */
    public function getIEmployee()
    {
        return $this->IEmployee;
    }

    /**
     * @param string $IEmployee
     */
    public function setIEmployee($IEmployee)
    {
        $this->IEmployee=$IEmployee;
    }
    /**
     * @return boolean
     */
    public function getILabourChecked()
    {
        return $this->ILabourChecked;
    }

    /**
     * @param boolean $ILabourChecked
     */
    public function setILabourChecked($ILabourChecked)
    {
        $this->ILabourChecked=$ILabourChecked;
    }
    /**
     * @return boolean
     */
    public function getIKeyedProduct()
    {
        return $this->IKeyedProduct;
    }

    /**
     * @param boolean $IKeyedProduct
     */
    public function setIKeyedProduct($IKeyedProduct)
    {
        $this->IKeyedProduct=$IKeyedProduct;
    }
    /**
     * @return string
     */
    public function getIProductLine()
    {
        return $this->IProductLine;
    }

    /**
     * @param string $IProductLine
     */
    public function setIProductLine($IProductLine)
    {
        $this->IProductLine=$IProductLine;
    }
    /**
     * @return \datetime
     */
    public function getIDateCreated()
    {
        return $this->IDateCreated;
    }

    /**
     * @param \datetime $IDateCreated
     */
    public function setIDateCreated($IDateCreated)
    {
        $this->IDateCreated=$IDateCreated;
    }
    /**
     * @return \datetime
     */
    public function getIDateUpdated()
    {
        return $this->IDateUpdated;
    }

    /**
     * @param \datetime $IDateUpdated
     */
    public function setIDateUpdated($IDateUpdated)
    {
        $this->IDateUpdated=$IDateUpdated;
    }
    /**
     * @return string
     */
    public function getICreatedSysUser()
    {
        return $this->ICreatedSysUser;
    }

    /**
     * @param string $ICreatedSysUser
     */
    public function setICreatedSysUser($ICreatedSysUser)
    {
        $this->ICreatedSysUser=$ICreatedSysUser;
    }
    /**
     * @return string
     */
    public function getIUpdatedSysUser()
    {
        return $this->IUpdatedSysUser;
    }

    /**
     * @param string $IUpdatedSysUser
     */
    public function setIUpdatedSysUser($IUpdatedSysUser)
    {
        $this->IUpdatedSysUser=$IUpdatedSysUser;
    }
    /**
     * @return string
     */
    public function getIListPricePending()
    {
        return $this->IListPricePending;
    }

    /**
     * @param string $IListPricePending
     */
    public function setIListPricePending($IListPricePending)
    {
        $this->IListPricePending=$IListPricePending;
    }
    /**
     * @return string
     */
    public function getIStandardCostPending()
    {
        return $this->IStandardCostPending;
    }

    /**
     * @param string $IStandardCostPending
     */
    public function setIStandardCostPending($IStandardCostPending)
    {
        $this->IStandardCostPending=$IStandardCostPending;
    }
    /**
     * @return string
     */
    public function getIDiscountCodePending()
    {
        return $this->IDiscountCodePending;
    }

    /**
     * @param string $IDiscountCodePending
     */
    public function setIDiscountCodePending($IDiscountCodePending)
    {
        $this->IDiscountCodePending=$IDiscountCodePending;
    }
    /**
     * @return float
     */
    public function getIDiscountNumPending()
    {
        return $this->IDiscountNumPending;
    }

    /**
     * @param float $IDiscountNumPending
     */
    public function setIDiscountNumPending($IDiscountNumPending)
    {
        $this->IDiscountNumPending=$IDiscountNumPending;
    }
    /**
     * @return float
     */
    public function getILabourHourPending()
    {
        return $this->ILabourHourPending;
    }

    /**
     * @param float $ILabourHourPending
     */
    public function setILabourHourPending($ILabourHourPending)
    {
        $this->ILabourHourPending=$ILabourHourPending;
    }
    /**
     * @return string
     */
    public function getILabourRatePending()
    {
        return $this->ILabourRatePending;
    }

    /**
     * @param string $ILabourRatePending
     */
    public function setILabourRatePending($ILabourRatePending)
    {
        $this->ILabourRatePending=$ILabourRatePending;
    }
    /**
     * @return string
     */
    public function getILabourCostPending()
    {
        return $this->ILabourCostPending;
    }

    /**
     * @param string $ILabourCostPending
     */
    public function setILabourCostPending($ILabourCostPending)
    {
        $this->ILabourCostPending=$ILabourCostPending;
    }
    /**
     * @return \datetime
     */
    public function getIPriceDatePending()
    {
        return $this->IPriceDatePending;
    }

    /**
     * @param \datetime $IPriceDatePending
     */
    public function setIPriceDatePending($IPriceDatePending)
    {
        $this->IPriceDatePending=$IPriceDatePending;
    }
    /**
     * @return integer
     */
    public function getILeadTimePending()
    {
        return $this->ILeadTimePending;
    }

    /**
     * @param integer $ILeadTimePending
     */
    public function setILeadTimePending($ILeadTimePending)
    {
        $this->ILeadTimePending=$ILeadTimePending;
    }
    /**
     * @return boolean
     */
    public function getIDiscontinued()
    {
        return $this->IDiscontinued;
    }

    /**
     * @param boolean $IDiscontinued
     */
    public function setIDiscontinued($IDiscontinued)
    {
        $this->IDiscontinued=$IDiscontinued;
    }
    /**
     * @return boolean
     */
    public function getILinkHasFiles()
    {
        return $this->ILinkHasFiles;
    }

    /**
     * @param boolean $ILinkHasFiles
     */
    public function setILinkHasFiles($ILinkHasFiles)
    {
        $this->ILinkHasFiles=$ILinkHasFiles;
    }
    /**
     * @return string
     */
    public function getIVendorItemNumCheckedBy()
    {
        return $this->IVendorItemNumCheckedBy;
    }

    /**
     * @param string $IVendorItemNumCheckedBy
     */
    public function setIVendorItemNumCheckedBy($IVendorItemNumCheckedBy)
    {
        $this->IVendorItemNumCheckedBy=$IVendorItemNumCheckedBy;
    }
    /**
     * @return string
     */
    public function getIVendorNumIDCheckedBy()
    {
        return $this->IVendorNumIDCheckedBy;
    }

    /**
     * @param string $IVendorNumIDCheckedBy
     */
    public function setIVendorNumIDCheckedBy($IVendorNumIDCheckedBy)
    {
        $this->IVendorNumIDCheckedBy=$IVendorNumIDCheckedBy;
    }
    /**
     * @return string
     */
    public function getILeadTimeCheckedBy()
    {
        return $this->ILeadTimeCheckedBy;
    }

    /**
     * @param string $ILeadTimeCheckedBy
     */
    public function setILeadTimeCheckedBy($ILeadTimeCheckedBy)
    {
        $this->ILeadTimeCheckedBy=$ILeadTimeCheckedBy;
    }
    /**
     * @return string
     */
    public function getIVendorPriceCheckedBy()
    {
        return $this->IVendorPriceCheckedBy;
    }

    /**
     * @param string $IVendorPriceCheckedBy
     */
    public function setIVendorPriceCheckedBy($IVendorPriceCheckedBy)
    {
        $this->IVendorPriceCheckedBy=$IVendorPriceCheckedBy;
    }
    /**
     * @return \datetime
     */
    public function getIVendorItemNumCheckedDate()
    {
        return $this->IVendorItemNumCheckedDate;
    }

    /**
     * @param \datetime $IVendorItemNumCheckedDate
     */
    public function setIVendorItemNumCheckedDate($IVendorItemNumCheckedDate)
    {
        $this->IVendorItemNumCheckedDate=$IVendorItemNumCheckedDate;
    }
    /**
     * @return \datetime
     */
    public function getIVendorNumIDCheckedDate()
    {
        return $this->IVendorNumIDCheckedDate;
    }

    /**
     * @param \datetime $IVendorNumIDCheckedDate
     */
    public function setIVendorNumIDCheckedDate($IVendorNumIDCheckedDate)
    {
        $this->IVendorNumIDCheckedDate=$IVendorNumIDCheckedDate;
    }
    /**
     * @return \datetime
     */
    public function getILeadTimeCheckedDate()
    {
        return $this->ILeadTimeCheckedDate;
    }

    /**
     * @param \datetime $ILeadTimeCheckedDate
     */
    public function setILeadTimeCheckedDate($ILeadTimeCheckedDate)
    {
        $this->ILeadTimeCheckedDate=$ILeadTimeCheckedDate;
    }
    /**
     * @return \datetime
     */
    public function getIVendorPriceCheckedDate()
    {
        return $this->IVendorPriceCheckedDate;
    }

    /**
     * @param \datetime $IVendorPriceCheckedDate
     */
    public function setIVendorPriceCheckedDate($IVendorPriceCheckedDate)
    {
        $this->IVendorPriceCheckedDate=$IVendorPriceCheckedDate;
    }
    /**
     * @return string
     */
    public function getILabourCheckedBy()
    {
        return $this->ILabourCheckedBy;
    }

    /**
     * @param string $ILabourCheckedBy
     */
    public function setILabourCheckedBy($ILabourCheckedBy)
    {
        $this->ILabourCheckedBy=$ILabourCheckedBy;
    }
    /**
     * @return \datetime
     */
    public function getILabourCheckedDate()
    {
        return $this->ILabourCheckedDate;
    }

    /**
     * @param \datetime $ILabourCheckedDate
     */
    public function setILabourCheckedDate($ILabourCheckedDate)
    {
        $this->ILabourCheckedDate=$ILabourCheckedDate;
    }
    /**
     * @return boolean
     */
    public function getIisIntangible()
    {
        return $this->IisIntangible;
    }

    /**
     * @param boolean $IisIntangible
     */
    public function setIisIntangible($IisIntangible)
    {
        $this->IisIntangible=$IisIntangible;
    }
    /**
     * @return boolean
     */
    public function getIisEngineered()
    {
        return $this->IisEngineered;
    }

    /**
     * @param boolean $IisEngineered
     */
    public function setIisEngineered($IisEngineered)
    {
        $this->IisEngineered=$IisEngineered;
    }
    /**
     * @return string
     */
    public function getIMATERIAL()
    {
        return $this->IMATERIAL;
    }

    /**
     * @param string $IMATERIAL
     */
    public function setIMATERIAL($IMATERIAL)
    {
        $this->IMATERIAL=$IMATERIAL;
    }
    /**
     * @return string
     */
    public function getIREBATEWIDTH()
    {
        return $this->IREBATEWIDTH;
    }

    /**
     * @param string $IREBATEWIDTH
     */
    public function setIREBATEWIDTH($IREBATEWIDTH)
    {
        $this->IREBATEWIDTH=$IREBATEWIDTH;
    }
    /**
     * @return string
     */
    public function getIREBATEHEIGHT()
    {
        return $this->IREBATEHEIGHT;
    }

    /**
     * @param string $IREBATEHEIGHT
     */
    public function setIREBATEHEIGHT($IREBATEHEIGHT)
    {
        $this->IREBATEHEIGHT=$IREBATEHEIGHT;
    }
    /**
     * @return string
     */
    public function getISIDELITE()
    {
        return $this->ISIDELITE;
    }

    /**
     * @param string $ISIDELITE
     */
    public function setISIDELITE($ISIDELITE)
    {
        $this->ISIDELITE=$ISIDELITE;
    }
    /**
     * @return string
     */
    public function getIGAUGE()
    {
        return $this->IGAUGE;
    }

    /**
     * @param string $IGAUGE
     */
    public function setIGAUGE($IGAUGE)
    {
        $this->IGAUGE=$IGAUGE;
    }
    /**
     * @return string
     */
    public function getITHROAT()
    {
        return $this->ITHROAT;
    }

    /**
     * @param string $ITHROAT
     */
    public function setITHROAT($ITHROAT)
    {
        $this->ITHROAT=$ITHROAT;
    }
    /**
     * @return string
     */
    public function getIANCHOR()
    {
        return $this->IANCHOR;
    }

    /**
     * @param string $IANCHOR
     */
    public function setIANCHOR($IANCHOR)
    {
        $this->IANCHOR=$IANCHOR;
    }
    /**
     * @return string
     */
    public function getISTRIKEPREP()
    {
        return $this->ISTRIKEPREP;
    }

    /**
     * @param string $ISTRIKEPREP
     */
    public function setISTRIKEPREP($ISTRIKEPREP)
    {
        $this->ISTRIKEPREP=$ISTRIKEPREP;
    }
    /**
     * @return string
     */
    public function getIFIRELABEL()
    {
        return $this->IFIRELABEL;
    }

    /**
     * @param string $IFIRELABEL
     */
    public function setIFIRELABEL($IFIRELABEL)
    {
        $this->IFIRELABEL=$IFIRELABEL;
    }
    /**
     * @return string
     */
    public function getIPREPNOTE()
    {
        return $this->IPREPNOTE;
    }

    /**
     * @param string $IPREPNOTE
     */
    public function setIPREPNOTE($IPREPNOTE)
    {
        $this->IPREPNOTE=$IPREPNOTE;
    }
    /**
     * @return string
     */
    public function getIDWidthCode()
    {
        return $this->IDWidthCode;
    }

    /**
     * @param string $IDWidthCode
     */
    public function setIDWidthCode($IDWidthCode)
    {
        $this->IDWidthCode=$IDWidthCode;
    }
    /**
     * @return string
     */
    public function getIDHeightCode()
    {
        return $this->IDHeightCode;
    }

    /**
     * @param string $IDHeightCode
     */
    public function setIDHeightCode($IDHeightCode)
    {
        $this->IDHeightCode=$IDHeightCode;
    }
    /**
     * @return string
     */
    public function getIDLOCKPREP()
    {
        return $this->IDLOCKPREP;
    }

    /**
     * @param string $IDLOCKPREP
     */
    public function setIDLOCKPREP($IDLOCKPREP)
    {
        $this->IDLOCKPREP=$IDLOCKPREP;
    }
    /**
     * @return string
     */
    public function getIHANDINGNUM()
    {
        return $this->IHANDINGNUM;
    }

    /**
     * @param string $IHANDINGNUM
     */
    public function setIHANDINGNUM($IHANDINGNUM)
    {
        $this->IHANDINGNUM=$IHANDINGNUM;
    }
    /**
     * @return string
     */
    public function getIFSC()
    {
        return $this->IFSC;
    }

    /**
     * @param string $IFSC
     */
    public function setIFSC($IFSC)
    {
        $this->IFSC=$IFSC;
    }
    /**
     * @return integer
     */
    public function getIRefSource()
    {
        return $this->IRefSource;
    }

    /**
     * @param integer $IRefSource
     */
    public function setIRefSource($IRefSource)
    {
        $this->IRefSource=$IRefSource;
    }
    /**
     * @return integer
     */
    public function getIRefID()
    {
        return $this->IRefID;
    }

    /**
     * @param integer $IRefID
     */
    public function setIRefID($IRefID)
    {
        $this->IRefID=$IRefID;
    }
    /**
     * @return string
     */
    public function getIScratchPads()
    {
        return $this->IScratchPads;
    }

    /**
     * @param string $IScratchPads
     */
    public function setIScratchPads($IScratchPads)
    {
        $this->IScratchPads=$IScratchPads;
    }
    /**
     * @return integer
     */
    public function getIWorkStatus()
    {
        return $this->IWorkStatus;
    }

    /**
     * @param integer $IWorkStatus
     */
    public function setIWorkStatus($IWorkStatus)
    {
        $this->IWorkStatus=$IWorkStatus;
    }
    /**
     * @return string
     */
    public function getIWorkNote()
    {
        return $this->IWorkNote;
    }

    /**
     * @param string $IWorkNote
     */
    public function setIWorkNote($IWorkNote)
    {
        $this->IWorkNote=$IWorkNote;
    }
    /**
     * @return \datetime
     */
    public function getIWorkDateIssued()
    {
        return $this->IWorkDateIssued;
    }

    /**
     * @param \datetime $IWorkDateIssued
     */
    public function setIWorkDateIssued($IWorkDateIssued)
    {
        $this->IWorkDateIssued=$IWorkDateIssued;
    }
    /**
     * @return \datetime
     */
    public function getIWorkDateAccepted()
    {
        return $this->IWorkDateAccepted;
    }

    /**
     * @param \datetime $IWorkDateAccepted
     */
    public function setIWorkDateAccepted($IWorkDateAccepted)
    {
        $this->IWorkDateAccepted=$IWorkDateAccepted;
    }
    /**
     * @return \datetime
     */
    public function getIWorkDateCompleted()
    {
        return $this->IWorkDateCompleted;
    }

    /**
     * @param \datetime $IWorkDateCompleted
     */
    public function setIWorkDateCompleted($IWorkDateCompleted)
    {
        $this->IWorkDateCompleted=$IWorkDateCompleted;
    }
    /**
     * @return \datetime
     */
    public function getIWorkDateShipped()
    {
        return $this->IWorkDateShipped;
    }

    /**
     * @param \datetime $IWorkDateShipped
     */
    public function setIWorkDateShipped($IWorkDateShipped)
    {
        $this->IWorkDateShipped=$IWorkDateShipped;
    }
    /**
     * @return integer
     */
    public function getICreatedSysUserPK()
    {
        return $this->ICreatedSysUserPK;
    }

    /**
     * @param integer $ICreatedSysUserPK
     */
    public function setICreatedSysUserPK($ICreatedSysUserPK)
    {
        $this->ICreatedSysUserPK=$ICreatedSysUserPK;
    }
    /**
     * @return integer
     */
    public function getILinkedPK()
    {
        return $this->ILinkedPK;
    }

    /**
     * @param integer $ILinkedPK
     */
    public function setILinkedPK($ILinkedPK)
    {
        $this->ILinkedPK=$ILinkedPK;
    }
    /**
     * @return string
     */
    public function getIVendorPriceCheckedByOld()
    {
        return $this->IVendorPriceCheckedByOld;
    }

    /**
     * @param string $IVendorPriceCheckedByOld
     */
    public function setIVendorPriceCheckedByOld($IVendorPriceCheckedByOld)
    {
        $this->IVendorPriceCheckedByOld=$IVendorPriceCheckedByOld;
    }
    /**
     * @return \datetime
     */
    public function getIVendorPriceCheckedDateOld()
    {
        return $this->IVendorPriceCheckedDateOld;
    }

    /**
     * @param \datetime $IVendorPriceCheckedDateOld
     */
    public function setIVendorPriceCheckedDateOld($IVendorPriceCheckedDateOld)
    {
        $this->IVendorPriceCheckedDateOld=$IVendorPriceCheckedDateOld;
    }
    /**
     * @return string
     */
    public function getVVendorNumID()
    {
        return $this->VVendorNumID;
    }

    /**
     * @param string $VVendorNumID
     */
    public function setVVendorNumID($VVendorNumID)
    {
        $this->VVendorNumID=$VVendorNumID;
    }
    /**
     * @return string
     */
    public function getVName()
    {
        return $this->VName;
    }

    /**
     * @param string $VName
     */
    public function setVName($VName)
    {
        $this->VName=$VName;
    }
    /**
     * @return string
     */
    public function getILinkedNumID()
    {
        return $this->ILinkedNumID;
    }

    /**
     * @param string $ILinkedNumID
     */
    public function setILinkedNumID($ILinkedNumID)
    {
        $this->ILinkedNumID=$ILinkedNumID;
    }
    /**
     * @return integer
     */
    public function getRClosingBalance()
    {
        return $this->RClosingBalance;
    }

    /**
     * @param integer $RClosingBalance
     */
    public function setRClosingBalance($RClosingBalance)
    {
        $this->RClosingBalance=$RClosingBalance;
    }
    /**
     * @return integer
     */
    public function getRBalanceActual()
    {
        return $this->RBalanceActual;
    }

    /**
     * @param integer $RBalanceActual
     */
    public function setRBalanceActual($RBalanceActual)
    {
        $this->RBalanceActual=$RBalanceActual;
    }

    /**
     * @return string
     */
    public function getINote1Fake()
    {
        return $this->INote1Fake;
    }

    /**
     * @param string $INote1Fake
     */
    public function setINote1Fake($INote1Fake)
    {
        $this->INote1Fake = $INote1Fake;
    }

    /**
     * @return string
     */
    public function getICreatedSysUserFake()
    {
        return $this->ICreatedSysUserFake;
    }

    /**
     * @param string $ICreatedSysUserFake
     */
    public function setICreatedSysUserFake($ICreatedSysUserFake)
    {
        $this->ICreatedSysUserFake = $ICreatedSysUserFake;
    }

    /**
     * @return string
     */
    public function getICategoryIDFake()
    {
        return $this->ICategoryIDFake;
    }

    /**
     * @param string $ICategoryIDFake
     */
    public function setICategoryIDFake($ICategoryIDFake)
    {
        $this->ICategoryIDFake = $ICategoryIDFake;
    }

    /**
     * @return int
     */
    public function getIWorkStatusFake()
    {
        return $this->IWorkStatusFake;
    }

    /**
     * @param int $IWorkStatusFake
     */
    public function setIWorkStatusFake($IWorkStatusFake)
    {
        $this->IWorkStatusFake = $IWorkStatusFake;
    }

    /**
     * @return string
     */
    public function getIScratchPadsFake()
    {
        return $this->IScratchPadsFake;
    }

    /**
     * @param string $IScratchPadsFake
     */
    public function setIScratchPadsFake($IScratchPadsFake)
    {
        $this->IScratchPadsFake = $IScratchPadsFake;
    }

    /**
     * @return string
     */
    public function getIVendorPriceCheckedByFake()
    {
        return $this->IVendorPriceCheckedByFake;
    }

    /**
     * @param string $IVendorPriceCheckedByFake
     */
    public function setIVendorPriceCheckedByFake($IVendorPriceCheckedByFake)
    {
        $this->IVendorPriceCheckedByFake = $IVendorPriceCheckedByFake;
    }

    /**
     * @return \datetime
     */
    public function getIVendorPriceCheckedDateFake()
    {
        return $this->IVendorPriceCheckedDateFake;
    }

    /**
     * @param \datetime $IVendorPriceCheckedDateFake
     */
    public function setIVendorPriceCheckedDateFake($IVendorPriceCheckedDateFake)
    {
        $this->IVendorPriceCheckedDateFake = $IVendorPriceCheckedDateFake;
    }

    /**
     * @return string
     */
    public function getIUpdatedSysUserFake()
    {
        return $this->IUpdatedSysUserFake;
    }

    /**
     * @param string $IUpdatedSysUserFake
     */
    public function setIUpdatedSysUserFake($IUpdatedSysUserFake)
    {
        $this->IUpdatedSysUserFake = $IUpdatedSysUserFake;
    }

    /**
     * @return \datetime
     */
    public function getIDateUpdatedFake()
    {
        return $this->IDateUpdatedFake;
    }

    /**
     * @param \datetime $IDateUpdatedFake
     */
    public function setIDateUpdatedFake($IDateUpdatedFake)
    {
        $this->IDateUpdatedFake = $IDateUpdatedFake;
    }

    /**
     * @return int
     */
    public function getILeadTimeFake()
    {
        return $this->ILeadTimeFake;
    }

    /**
     * @param int $ILeadTimeFake
     */
    public function setILeadTimeFake($ILeadTimeFake)
    {
        $this->ILeadTimeFake = $ILeadTimeFake;
    }

    /**
     * @return boolean
     */
    public function isVConsiderVendor()
    {
        return $this->VConsiderVendor;
    }

    /**
     * @param boolean $VConsiderVendor
     */
    public function setVConsiderVendor($VConsiderVendor)
    {
        $this->VConsiderVendor = $VConsiderVendor;
    }

    /**
     * @return string
     */
    public function getIStockedLevel()
    {
        return $this->IStockedLevel;
    }

    /**
     * @param string $IStockedLevel
     */
    public function setIStockedLevel($IStockedLevel)
    {
        $this->IStockedLevel = $IStockedLevel;
    }

    /**
     * @return string
     */
    public function getConPK()
    {
        return $this->ConPK;
    }

    /**
     * @param string $ConPK
     */
    public function setConPK($ConPK)
    {
        $this->ConPK = $ConPK;
    }

}