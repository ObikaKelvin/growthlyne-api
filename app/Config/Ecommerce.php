<?php

namespace CodeIgniter\Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Stores E-commerce add-on configuration
 *
 * @package Config
 */
class Ecommerce extends BaseConfig {

  /**
   * Array of countries where buyers can place an order.
   *
   * @var array
   */
  public $supportedCountries = [
    'ALA', 'AFG', 'ALB', 'DZA', 'ASM', 'AND', 'AGO', 'AIA', 'ATA', 'ATG',
    'ARG', 'ARM', 'ABW', 'AUS', 'AUT', 'AZE', 'BHS', 'BHR', 'BGD', 'BRB',
    'BLR', 'BEL', 'BLZ', 'BEN', 'BMU', 'BTN', 'BOL', 'BES', 'BIH', 'BWA',
    'BVT', 'BRA', 'IOT', 'BRN', 'BGR', 'BFA', 'BDI', 'CPV', 'KHM', 'CMR',
    'CAN', 'CYM', 'CAF', 'TCD', 'CHL', 'CHN', 'CXR', 'CCK', 'COL', 'COM',
    'COD', 'COG', 'COK', 'CRI', 'HRV', 'CUB', 'CUW', 'CYP', 'CZE', 'CIV',
    'DNK', 'DJI', 'DMA', 'DOM', 'ECU', 'EGY', 'SLV', 'GNQ', 'ERI', 'EST',
    'SWZ', 'ETH', 'FLK', 'FRO', 'FJI', 'FIN', 'FRA', 'GUF', 'PYF', 'ATF',
    'GAB', 'GMB', 'GEO', 'DEU', 'GHA', 'GIB', 'GRC', 'GRL', 'GRD', 'GLP',
    'GUM', 'GTM', 'GGY', 'GIN', 'GNB', 'GUY', 'HTI', 'HMD', 'VAT', 'HND',
    'HKG', 'HUN', 'ISL', 'IND', 'IDN', 'IRN', 'IRQ', 'IRL', 'IMN', 'ISR',
    'ITA', 'JAM', 'JPN', 'JEY', 'JOR', 'KAZ', 'KEN', 'KIR', 'PRK', 'KOR',
    'KWT', 'KGZ', 'LAO', 'LVA', 'LBN', 'LSO', 'LBR', 'LBY', 'LIE', 'LTU',
    'LUX', 'MAC', 'MDG', 'MWI', 'MYS', 'MDV', 'MLI', 'MLT', 'MHL', 'MTQ',
    'MRT', 'MUS', 'MYT', 'MEX', 'FSM', 'MDA', 'MCO', 'MNG', 'MNE', 'MSR',
    'MAR', 'MOZ', 'MMR', 'NAM', 'NRU', 'NPL', 'NLD', 'NCL', 'NZL', 'NIC',
    'NER', 'NGA', 'NIU', 'NFK', 'MNP', 'NOR', 'OMN', 'PAK', 'PLW', 'PSE',
    'PAN', 'PNG', 'PRY', 'PER', 'PHL', 'PCN', 'POL', 'PRT', 'PRI', 'QAT',
    'MKD', 'ROU', 'RUS', 'RWA', 'REU', 'BLM', 'SHN', 'KNA', 'LCA', 'MAF',
    'SPM', 'VCT', 'WSM', 'SMR', 'STP', 'SAU', 'SEN', 'SRB', 'SYC', 'SLE',
    'SGP', 'SXM', 'SVK', 'SVN', 'SLB', 'SOM', 'ZAF', 'SGS', 'SSD', 'ESP',
    'LKA', 'SDN', 'SUR', 'SJM', 'SWE', 'CHE', 'SYR', 'TWN', 'TJK', 'TZA',
    'THA', 'TLS', 'TGO', 'TKL', 'TON', 'TTO', 'TUN', 'TUR', 'TKM', 'TCA',
    'TUV', 'UGA', 'UKR', 'ARE', 'GBR', 'UMI', 'USA', 'URY', 'UZB', 'VUT',
    'VEN', 'VNM', 'VGB', 'VIR', 'WLF', 'ESH', 'YEM', 'ZMB', 'ZWE',
  ];

  /**
   * Array of currencies you support.
   *
   * @var array
   */
  public $supportedCurrencies = [
    'AFN', 'ALL', 'DZD', 'ARS', 'AUD', 'AZN', 'BSD', 'BDT', 'BBD', 'BZD',
    'BMD', 'BOB', 'BWP', 'BRL', 'GBP', 'BND', 'BGN', 'CAD', 'CLP', 'CNY',
    'COP', 'CRC', 'HRK', 'CZK', 'DKK', 'DOP', 'XCD', 'EGP', 'EUR', 'FJD',
    'GTQ', 'HKD', 'HNL', 'HUF', 'INR', 'IDR', 'ILS', 'JMD', 'JPY', 'KZT',
    'KES', 'LAK', 'MMK', 'LBP', 'LRD', 'MOP', 'MYR', 'MVR', 'MRO', 'MUR',
    'MXN', 'MAD', 'NPR', 'TWD', 'NZD', 'NIO', 'NOK', 'PKR', 'PGK', 'PEN',
    'PHP', 'PLN', 'QAR', 'RON', 'RUB', 'WST', 'SAR', 'SCR', 'SGD', 'SBD',
    'ZAR', 'KRW', 'LKR', 'SEK', 'CHF', 'SYP', 'THB', 'TOP', 'TTD', 'TRY',
    'UAH', 'AED', 'USD', 'VUV', 'VND', 'XOF', 'YER'
  ];

  /**
   * Array of countries that require address 2 for placing an order.
   *
   * @var array
   */
  public $countriesRequireAddress2 = [
    'CHN', 'JPN', 'RUS'
  ];

  /**
   * Array of countries that require the state for placing an order.
   *
   * @var array
   */
  public $countriesRequireState = [
    'ARG', 'AUS', 'BGR', 'CAN', 'CHN', 'CYP', 'EGY', 'FRA', 'IND', 'IDN',
    'ITA', 'JPN', 'MYS', 'MEX', 'NLD', 'PAN', 'PHL', 'POL', 'ROU', 'RUS',
    'SRB', 'SGP', 'ZAF', 'ESP', 'SWE', 'THA', 'TUR', 'GBR', 'USA'
  ];

  /**
   * Array of countries that require ZIP code for placing an order.
   *
   * @var array
   */
  public $countriesRequireZip = [
    'ARG', 'AUS', 'BGR', 'CAN', 'CHN', 'CYP', 'EGY', 'FRA', 'IND', 'IDN',
    'ITA', 'JPN', 'MYS', 'MEX', 'NLD', 'PAN', 'PHL', 'POL', 'ROU', 'RUS',
    'SRB', 'SGP', 'ZAF', 'ESP', 'SWE', 'THA', 'TUR', 'GBR', 'USA'
  ];

  /**
   * This array maps services to APIs they should update.
   * 
   * Simply "map" the fully qualified class name of any class with the
   * IPublisher trait to the fully qualified class names of any classes
   * inheriting the IObserver class.
   * 
   * The events which are sent to APIs are IEvent objects, and the data
   * tranmitted through IEvent->data() depends on the event nature. You need
   * to check the type and format of the returned data to work with it.
   * 
   * NOTE: ONLY SERVICES UPDATE APIs -- NOT THE OTHER WAY ROUND. You cannot
   * update any object internally (in your db, etc.) from an API's IObserver
   * class. To do this, you need to extend a service interface and modify it to
   * your needs.
   * 
   * NOTE: the classes which provide the update must be IPublishers. All
   * services included in CodeIgniter\Ecommerce\Config\Services are
   * IPublishers, and can be used here.
   * 
   * You can also create IObservers for APIs on your own. Place them into the
   * /ThirdParty/ directory, and make sure to do require_once at the beginning of
   * this file.
   * 
   * Example:
   * require_once '/path/to/SegmentAPIObserver.php';
   * require_once '/path/to/ActiveCampaignObserver.php';
   * require_once '/path/to/QuickBooksObserver.php';
   * 
   * public $observerMap = [
   *   InternalContactService::class => [
   *     SegmentAPIObserver::class,
   *     ActiveCampaignObserver::class,
   *   ],
   *   InternalOrders::class => [
   *     ActiveCampaignObserver::class,
   *     QuickBooksObserver::class,
   *   ]
   * ]
   * 
   * @var array
   */
  public $observerMap = [];
}
