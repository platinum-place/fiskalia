<?php

declare(strict_types=1);

return [
    /**
     * StatusEnum
     */
    'current' => 'Actual',
    'reserve' => 'Reserva',

    /**
     * TypeEnum
     */
    'FISCALINVOICE' => 'Factura de Crédito Fiscal Electrónica',
    'CONSUMEINVOICE' => 'Factura de Consumo Electrónica',
    'DEBITNOTE' => 'Nota de Débito Electrónica',
    'CREDITNOTE' => 'Nota de Crédito Electrónica',
    'EPURCHASES' => 'Comprobante Electrónico de Compras',
    'MINOREXPENSE' => 'Comprobante Electrónico para Gastos Menores',
    'SPECIALREGIME' => 'Comprobante Electrónico para Regímenes Especiales',
    'EGOVERNMENT' => 'Comprobante Electrónico Gubernamental',
    'EEXPORTS' => 'Comprobante Electrónico para Exportaciones',
    'FOREIGNPAYMENTS' => 'Comprobante Electrónico para Pagos al Exterior',
];
