<?= '<?xml version="1.0" encoding="utf-8"?>' ?>
<ECF>
    <Encabezado>
        <Version>1.0</Version>
        <IdDoc>
            <TipoeCF>31</TipoeCF>
            <eNCF>{{ $IdDoc['eNCF'] }}</eNCF>
            <FechaVencimientoSecuencia>{{ $IdDoc['FechaVencimientoSecuencia'] }}</FechaVencimientoSecuencia>
            {{--        <IndicadorEnvioDiferido>1</IndicadorEnvioDiferido>--}}
            <IndicadorMontoGravado>0</IndicadorMontoGravado>
            {{--      <IndicadorServicioTodoIncluido>1</IndicadorServicioTodoIncluido>--}}
            <TipoIngresos>{{ $IdDoc['TipoIngresos'] }}</TipoIngresos>
            <TipoPago>{{ $IdDoc['TipoPago'] }}</TipoPago>
            @isset($IdDoc['FechaLimitePago'])
                <FechaLimitePago>{{ $IdDoc['FechaLimitePago'] }}</FechaLimitePago>
            @endisset
            {{--      <TerminoPago>TerminoPago1</TerminoPago>--}}
            {{--      <TablaFormasPago>--}}
            {{--        <FormaDePago>--}}
            {{--          <FormaPago>1</FormaPago>--}}
            {{--          <MontoPago>1</MontoPago>--}}
            {{--        </FormaDePago>--}}
            {{--        <FormaDePago>--}}
            {{--          <FormaPago>2</FormaPago>--}}
            {{--          <MontoPago>-10000000000000000</MontoPago>--}}
            {{--        </FormaDePago>--}}
            {{--        <FormaDePago>--}}
            {{--          <FormaPago>3</FormaPago>--}}
            {{--          <MontoPago>10000000000000000</MontoPago>--}}
            {{--        </FormaDePago>--}}
            {{--      </TablaFormasPago>--}}
            {{--      <TipoCuentaPago>CT</TipoCuentaPago>--}}
            {{--      <NumeroCuentaPago>NumeroCuentaPago1</NumeroCuentaPago>--}}
            {{--      <BancoPago>BancoPago1</BancoPago>--}}
            {{--      <FechaDesde>FechaDesde1</FechaDesde>--}}
            {{--      <FechaHasta>FechaHasta1</FechaHasta>--}}
            {{--      <TotalPaginas>2</TotalPaginas>--}}
        </IdDoc>
        <Emisor>
            <RNCEmisor>{{ $Emisor['RNCEmisor'] }}</RNCEmisor>
            <RazonSocialEmisor>{{ $Emisor['RazonSocialEmisor'] }}</RazonSocialEmisor>
            <NombreComercial>{{ $Emisor['NombreComercial'] }}</NombreComercial>
{{--            <Sucursal>Sucursal1</Sucursal>--}}
{{--            <DireccionEmisor>DireccionEmisor1</DireccionEmisor>--}}
{{--            <Municipio>10000</Municipio>--}}
{{--            <Provincia>10000</Provincia>--}}
{{--            <TablaTelefonoEmisor>--}}
{{--                <TelefonoEmisor>TelefonoEmi1</TelefonoEmisor>--}}
{{--                <TelefonoEmisor>TelefonoEmi2</TelefonoEmisor>--}}
{{--                <TelefonoEmisor>TelefonoEmi3</TelefonoEmisor>--}}
{{--            </TablaTelefonoEmisor>--}}
{{--            <CorreoEmisor>CorreoEmisor1</CorreoEmisor>--}}
{{--            <WebSite>WebSite1</WebSite>--}}
{{--            <ActividadEconomica>ActividadEconomica1</ActividadEconomica>--}}
{{--            <CodigoVendedor>CodigoVendedor1</CodigoVendedor>--}}
{{--            <NumeroFacturaInterna>NumeroFacturaIntern1</NumeroFacturaInterna>--}}
{{--            <NumeroPedidoInterno>1</NumeroPedidoInterno>--}}
{{--            <ZonaVenta>ZonaVenta1</ZonaVenta>--}}
{{--            <RutaVenta>RutaVenta1</RutaVenta>--}}
{{--            <InformacionAdicionalEmisor>InformacionAdicionalEmisor1</InformacionAdicionalEmisor>--}}
{{--            <FechaEmision>FechaEmision1</FechaEmision>--}}
        </Emisor>
        <Comprador>
            <RNCComprador>{{ $Comprador['RNCComprador'] }}</RNCComprador>
            <RazonSocialComprador>{{ $Comprador['RazonSocialComprador'] }}</RazonSocialComprador>
{{--            <ContactoComprador>ContactoComprador1</ContactoComprador>--}}
{{--            <CorreoComprador>CorreoComprador1</CorreoComprador>--}}
{{--            <DireccionComprador>DireccionComprador1</DireccionComprador>--}}
{{--            <MunicipioComprador>10000</MunicipioComprador>--}}
{{--            <ProvinciaComprador>10000</ProvinciaComprador>--}}
{{--            <FechaEntrega>FechaEntrega1</FechaEntrega>--}}
{{--            <ContactoEntrega>ContactoEntrega1</ContactoEntrega>--}}
{{--            <DireccionEntrega>DireccionEntrega1</DireccionEntrega>--}}
{{--            <TelefonoAdicional>TelefonoAdi1</TelefonoAdicional>--}}
{{--            <FechaOrdenCompra>FechaOrdenCompra1</FechaOrdenCompra>--}}
{{--            <NumeroOrdenCompra>NumeroOrdenCompra1</NumeroOrdenCompra>--}}
{{--            <CodigoInternoComprador>CodigoInternoCompra1</CodigoInternoComprador>--}}
{{--            <ResponsablePago>ResponsablePago1</ResponsablePago>--}}
{{--            <InformacionAdicionalComprador>InformacionAdicionalComprador1</InformacionAdicionalComprador>--}}
        </Comprador>
{{--        <InformacionesAdicionales>--}}
{{--            <FechaEmbarque>FechaEmbarque1</FechaEmbarque>--}}
{{--            <NumeroEmbarque>NumeroEmbarque1</NumeroEmbarque>--}}
{{--            <NumeroContenedor>NumeroContenedor1</NumeroContenedor>--}}
{{--            <NumeroReferencia>1</NumeroReferencia>--}}
{{--            <PesoBruto>1</PesoBruto>--}}
{{--            <PesoNeto>1</PesoNeto>--}}
{{--            <UnidadPesoBruto>1</UnidadPesoBruto>--}}
{{--            <UnidadPesoNeto>1</UnidadPesoNeto>--}}
{{--            <CantidadBulto>1</CantidadBulto>--}}
{{--            <UnidadBulto>1</UnidadBulto>--}}
{{--            <VolumenBulto>1</VolumenBulto>--}}
{{--            <UnidadVolumen>1</UnidadVolumen>--}}
{{--        </InformacionesAdicionales>--}}
{{--        <Transporte>--}}
{{--            <Conductor>Conductor1</Conductor>--}}
{{--            <DocumentoTransporte>1</DocumentoTransporte>--}}
{{--            <Ficha>Ficha1</Ficha>--}}
{{--            <Placa>Placa1</Placa>--}}
{{--            <RutaTransporte>RutaTransporte1</RutaTransporte>--}}
{{--            <ZonaTransporte>ZonaTransporte1</ZonaTransporte>--}}
{{--            <NumeroAlbaran>NumeroAlbaran1</NumeroAlbaran>--}}
{{--        </Transporte>--}}
        <Totales>
            <MontoGravadoTotal>{{ $Totales['MontoGravadoTotal'] }}</MontoGravadoTotal>
            @isset($Totales['MontoGravadoI1'])
                <MontoGravadoI1>{{ $Totales['MontoGravadoI1'] }}</MontoGravadoI1>
            @endisset
            @isset($Totales['MontoGravadoI2'])
                <MontoGravadoI2>{{ $Totales['MontoGravadoI2'] }}</MontoGravadoI2>
            @endisset
            @isset($Totales['MontoGravadoI3'])
                <MontoGravadoI3>{{ $Totales['MontoGravadoI3'] }}</MontoGravadoI3>
            @endisset
            @isset($Totales['MontoExento'])
                <MontoExento>{{ $Totales['MontoExento'] }}</MontoExento>
            @endisset
            @isset($Totales['ITBIS1'])
                <ITBIS1>{{ $Totales['ITBIS1'] }}</ITBIS1>
            @endisset
            @isset($Totales['ITBIS2'])
                <ITBIS2>{{ $Totales['ITBIS2'] }}</ITBIS2>
            @endisset
            @isset($Totales['ITBIS3'])
                <ITBIS3>{{ $Totales['ITBIS3'] }}</ITBIS3>
            @endisset
            <TotalITBIS>{{ $Totales['TotalITBIS'] }}</TotalITBIS>
            @isset($Totales['TotalITBIS1'])
                <TotalITBIS1>{{ $Totales['TotalITBIS1'] }}</TotalITBIS1>
            @endisset
            @isset($Totales['TotalITBIS2'])
                <TotalITBIS2>{{ $Totales['TotalITBIS2'] }}</TotalITBIS2>
            @endisset
            @isset($Totales['TotalITBIS3'])
                <TotalITBIS3>{{ $Totales['TotalITBIS3'] }}</TotalITBIS3>
            @endisset
{{--            <MontoImpuestoAdicional>1</MontoImpuestoAdicional>--}}
{{--            <ImpuestosAdicionales>--}}
{{--                <ImpuestoAdicional>--}}
{{--                    <TipoImpuesto>001</TipoImpuesto>--}}
{{--                    <TasaImpuestoAdicional>1</TasaImpuestoAdicional>--}}
{{--                    <MontoImpuestoSelectivoConsumoEspecifico>1</MontoImpuestoSelectivoConsumoEspecifico>--}}
{{--                    <MontoImpuestoSelectivoConsumoAdvalorem>1</MontoImpuestoSelectivoConsumoAdvalorem>--}}
{{--                    <OtrosImpuestosAdicionales>1</OtrosImpuestosAdicionales>--}}
{{--                </ImpuestoAdicional>--}}
{{--                <ImpuestoAdicional>--}}
{{--                    <TipoImpuesto>002</TipoImpuesto>--}}
{{--                    <TasaImpuestoAdicional>-999.999</TasaImpuestoAdicional>--}}
{{--                    <MontoImpuestoSelectivoConsumoEspecifico>-10000000000000000--}}
{{--                    </MontoImpuestoSelectivoConsumoEspecifico>--}}
{{--                    <MontoImpuestoSelectivoConsumoAdvalorem>-10000000000000000</MontoImpuestoSelectivoConsumoAdvalorem>--}}
{{--                    <OtrosImpuestosAdicionales>-10000000000000000</OtrosImpuestosAdicionales>--}}
{{--                </ImpuestoAdicional>--}}
{{--                <ImpuestoAdicional>--}}
{{--                    <TipoImpuesto>003</TipoImpuesto>--}}
{{--                    <TasaImpuestoAdicional>999.999</TasaImpuestoAdicional>--}}
{{--                    <MontoImpuestoSelectivoConsumoEspecifico>10000000000000000</MontoImpuestoSelectivoConsumoEspecifico>--}}
{{--                    <MontoImpuestoSelectivoConsumoAdvalorem>10000000000000000</MontoImpuestoSelectivoConsumoAdvalorem>--}}
{{--                    <OtrosImpuestosAdicionales>10000000000000000</OtrosImpuestosAdicionales>--}}
{{--                </ImpuestoAdicional>--}}
{{--            </ImpuestosAdicionales>--}}
            <MontoTotal>{{ $Totales['MontoTotal'] }}</MontoTotal>
{{--            <MontoNoFacturable>1</MontoNoFacturable>--}}
{{--            <MontoPeriodo>1</MontoPeriodo>--}}
{{--            <SaldoAnterior>1</SaldoAnterior>--}}
{{--            <MontoAvancePago>1</MontoAvancePago>--}}
{{--            <ValorPagar>1</ValorPagar>--}}
{{--            <TotalITBISRetenido>1</TotalITBISRetenido>--}}
{{--            <TotalISRRetencion>1</TotalISRRetencion>--}}
{{--            <TotalITBISPercepcion>1</TotalITBISPercepcion>--}}
{{--            <TotalISRPercepcion>1</TotalISRPercepcion>--}}
        </Totales>
{{--        <OtraMoneda>--}}
{{--            <TipoMoneda>BRL</TipoMoneda>--}}
{{--            <TipoCambio>1</TipoCambio>--}}
{{--            <MontoGravadoTotalOtraMoneda>1</MontoGravadoTotalOtraMoneda>--}}
{{--            <MontoGravado1OtraMoneda>1</MontoGravado1OtraMoneda>--}}
{{--            <MontoGravado2OtraMoneda>1</MontoGravado2OtraMoneda>--}}
{{--            <MontoGravado3OtraMoneda>1</MontoGravado3OtraMoneda>--}}
{{--            <MontoExentoOtraMoneda>1</MontoExentoOtraMoneda>--}}
{{--            <TotalITBISOtraMoneda>1</TotalITBISOtraMoneda>--}}
{{--            <TotalITBIS1OtraMoneda>1</TotalITBIS1OtraMoneda>--}}
{{--            <TotalITBIS2OtraMoneda>1</TotalITBIS2OtraMoneda>--}}
{{--            <TotalITBIS3OtraMoneda>1</TotalITBIS3OtraMoneda>--}}
{{--            <MontoImpuestoAdicionalOtraMoneda>1</MontoImpuestoAdicionalOtraMoneda>--}}
{{--            <ImpuestosAdicionalesOtraMoneda>--}}
{{--                <ImpuestoAdicionalOtraMoneda>--}}
{{--                    <TipoImpuestoOtraMoneda>001</TipoImpuestoOtraMoneda>--}}
{{--                    <TasaImpuestoAdicionalOtraMoneda>1</TasaImpuestoAdicionalOtraMoneda>--}}
{{--                    <MontoImpuestoSelectivoConsumoEspecificoOtraMoneda>1--}}
{{--                    </MontoImpuestoSelectivoConsumoEspecificoOtraMoneda>--}}
{{--                    <MontoImpuestoSelectivoConsumoAdvaloremOtraMoneda>1--}}
{{--                    </MontoImpuestoSelectivoConsumoAdvaloremOtraMoneda>--}}
{{--                    <OtrosImpuestosAdicionalesOtraMoneda>1</OtrosImpuestosAdicionalesOtraMoneda>--}}
{{--                </ImpuestoAdicionalOtraMoneda>--}}
{{--                <ImpuestoAdicionalOtraMoneda>--}}
{{--                    <TipoImpuestoOtraMoneda>002</TipoImpuestoOtraMoneda>--}}
{{--                    <TasaImpuestoAdicionalOtraMoneda>-999.999</TasaImpuestoAdicionalOtraMoneda>--}}
{{--                    <MontoImpuestoSelectivoConsumoEspecificoOtraMoneda>-10000000000000000--}}
{{--                    </MontoImpuestoSelectivoConsumoEspecificoOtraMoneda>--}}
{{--                    <MontoImpuestoSelectivoConsumoAdvaloremOtraMoneda>-10000000000000000--}}
{{--                    </MontoImpuestoSelectivoConsumoAdvaloremOtraMoneda>--}}
{{--                    <OtrosImpuestosAdicionalesOtraMoneda>-10000000000000000</OtrosImpuestosAdicionalesOtraMoneda>--}}
{{--                </ImpuestoAdicionalOtraMoneda>--}}
{{--                <ImpuestoAdicionalOtraMoneda>--}}
{{--                    <TipoImpuestoOtraMoneda>003</TipoImpuestoOtraMoneda>--}}
{{--                    <TasaImpuestoAdicionalOtraMoneda>999.999</TasaImpuestoAdicionalOtraMoneda>--}}
{{--                    <MontoImpuestoSelectivoConsumoEspecificoOtraMoneda>10000000000000000--}}
{{--                    </MontoImpuestoSelectivoConsumoEspecificoOtraMoneda>--}}
{{--                    <MontoImpuestoSelectivoConsumoAdvaloremOtraMoneda>10000000000000000--}}
{{--                    </MontoImpuestoSelectivoConsumoAdvaloremOtraMoneda>--}}
{{--                    <OtrosImpuestosAdicionalesOtraMoneda>10000000000000000</OtrosImpuestosAdicionalesOtraMoneda>--}}
{{--                </ImpuestoAdicionalOtraMoneda>--}}
{{--            </ImpuestosAdicionalesOtraMoneda>--}}
{{--            <MontoTotalOtraMoneda>1</MontoTotalOtraMoneda>--}}
{{--        </OtraMoneda>--}}
    </Encabezado>
    <DetallesItems>
        <Item>
            <NumeroLinea>1</NumeroLinea>
            <TablaCodigosItem>
                <CodigosItem>
                    <TipoCodigo>TipoCodigo1</TipoCodigo>
                    <CodigoItem>CodigoItem1</CodigoItem>
                </CodigosItem>
                <CodigosItem>
                    <TipoCodigo>TipoCodigo2</TipoCodigo>
                    <CodigoItem>CodigoItem2</CodigoItem>
                </CodigosItem>
                <CodigosItem>
                    <TipoCodigo>TipoCodigo3</TipoCodigo>
                    <CodigoItem>CodigoItem3</CodigoItem>
                </CodigosItem>
            </TablaCodigosItem>
            <IndicadorFacturacion>0</IndicadorFacturacion>
            <Retencion>
                <IndicadorAgenteRetencionoPercepcion>1</IndicadorAgenteRetencionoPercepcion>
                <MontoITBISRetenido>1</MontoITBISRetenido>
                <MontoISRRetenido>1</MontoISRRetenido>
            </Retencion>
            <NombreItem>NombreItem1</NombreItem>
            <IndicadorBienoServicio>1</IndicadorBienoServicio>
            <DescripcionItem>DescripcionItem1</DescripcionItem>
            <CantidadItem>1</CantidadItem>
            <UnidadMedida>1</UnidadMedida>
            <CantidadReferencia>1</CantidadReferencia>
            <UnidadReferencia>1</UnidadReferencia>
            <TablaSubcantidad>
                <SubcantidadItem>
                    <Subcantidad>1</Subcantidad>
                    <CodigoSubcantidad>1</CodigoSubcantidad>
                </SubcantidadItem>
                <SubcantidadItem>
                    <Subcantidad>-10000000000000000</Subcantidad>
                    <CodigoSubcantidad>2</CodigoSubcantidad>
                </SubcantidadItem>
                <SubcantidadItem>
                    <Subcantidad>10000000000000000</Subcantidad>
                    <CodigoSubcantidad>3</CodigoSubcantidad>
                </SubcantidadItem>
            </TablaSubcantidad>
            <GradosAlcohol>1</GradosAlcohol>
            <PrecioUnitarioReferencia>1</PrecioUnitarioReferencia>
            <FechaElaboracion>FechaElaboracion1</FechaElaboracion>
            <FechaVencimientoItem>FechaVencimientoItem1</FechaVencimientoItem>
            <PrecioUnitarioItem>1</PrecioUnitarioItem>
            <DescuentoMonto>1</DescuentoMonto>
            <TablaSubDescuento>
                <SubDescuento>
                    <TipoSubDescuento>$</TipoSubDescuento>
                    <SubDescuentoPorcentaje>1</SubDescuentoPorcentaje>
                    <MontoSubDescuento>1</MontoSubDescuento>
                </SubDescuento>
                <SubDescuento>
                    <TipoSubDescuento>%</TipoSubDescuento>
                    <SubDescuentoPorcentaje>-999.999</SubDescuentoPorcentaje>
                    <MontoSubDescuento>-10000000000000000</MontoSubDescuento>
                </SubDescuento>
                <SubDescuento>
                    <TipoSubDescuento>$</TipoSubDescuento>
                    <SubDescuentoPorcentaje>999.999</SubDescuentoPorcentaje>
                    <MontoSubDescuento>10000000000000000</MontoSubDescuento>
                </SubDescuento>
            </TablaSubDescuento>
            <RecargoMonto>1</RecargoMonto>
            <TablaSubRecargo>
                <SubRecargo>
                    <TipoSubRecargo>$</TipoSubRecargo>
                    <SubRecargoPorcentaje>1</SubRecargoPorcentaje>
                    <MontoSubRecargo>1</MontoSubRecargo>
                </SubRecargo>
                <SubRecargo>
                    <TipoSubRecargo>%</TipoSubRecargo>
                    <SubRecargoPorcentaje>-999.999</SubRecargoPorcentaje>
                    <MontoSubRecargo>-10000000000000000</MontoSubRecargo>
                </SubRecargo>
                <SubRecargo>
                    <TipoSubRecargo>$</TipoSubRecargo>
                    <SubRecargoPorcentaje>999.999</SubRecargoPorcentaje>
                    <MontoSubRecargo>10000000000000000</MontoSubRecargo>
                </SubRecargo>
            </TablaSubRecargo>
            <TablaImpuestoAdicional>
                <ImpuestoAdicional>
                    <TipoImpuesto>001</TipoImpuesto>
                </ImpuestoAdicional>
                <ImpuestoAdicional>
                    <TipoImpuesto>002</TipoImpuesto>
                </ImpuestoAdicional>
            </TablaImpuestoAdicional>
            <OtraMonedaDetalle>
                <PrecioOtraMoneda>1</PrecioOtraMoneda>
                <DescuentoOtraMoneda>1</DescuentoOtraMoneda>
                <RecargoOtraMoneda>1</RecargoOtraMoneda>
                <MontoItemOtraMoneda>1</MontoItemOtraMoneda>
            </OtraMonedaDetalle>
            <MontoItem>1</MontoItem>
        </Item>
    </DetallesItems>
{{--    <Subtotales>--}}
{{--        <Subtotal>--}}
{{--            <NumeroSubTotal>1</NumeroSubTotal>--}}
{{--            <DescripcionSubtotal>DescripcionSubtotal1</DescripcionSubtotal>--}}
{{--            <Orden>1</Orden>--}}
{{--            <SubTotalMontoGravadoTotal>1</SubTotalMontoGravadoTotal>--}}
{{--            <SubTotalMontoGravadoI1>1</SubTotalMontoGravadoI1>--}}
{{--            <SubTotalMontoGravadoI2>1</SubTotalMontoGravadoI2>--}}
{{--            <SubTotalMontoGravadoI3>1</SubTotalMontoGravadoI3>--}}
{{--            <SubTotaITBIS>1</SubTotaITBIS>--}}
{{--            <SubTotaITBIS1>1</SubTotaITBIS1>--}}
{{--            <SubTotaITBIS2>1</SubTotaITBIS2>--}}
{{--            <SubTotaITBIS3>1</SubTotaITBIS3>--}}
{{--            <SubTotalImpuestoAdicional>1</SubTotalImpuestoAdicional>--}}
{{--            <SubTotalExento>1</SubTotalExento>--}}
{{--            <MontoSubTotal>1</MontoSubTotal>--}}
{{--            <Lineas>1</Lineas>--}}
{{--        </Subtotal>--}}
{{--        <Subtotal>--}}
{{--            <NumeroSubTotal>-99</NumeroSubTotal>--}}
{{--            <DescripcionSubtotal>DescripcionSubtotal2</DescripcionSubtotal>--}}
{{--            <Orden>-99</Orden>--}}
{{--            <SubTotalMontoGravadoTotal>-10000000000000000</SubTotalMontoGravadoTotal>--}}
{{--            <SubTotalMontoGravadoI1>-10000000000000000</SubTotalMontoGravadoI1>--}}
{{--            <SubTotalMontoGravadoI2>-10000000000000000</SubTotalMontoGravadoI2>--}}
{{--            <SubTotalMontoGravadoI3>-10000000000000000</SubTotalMontoGravadoI3>--}}
{{--            <SubTotaITBIS>-10000000000000000</SubTotaITBIS>--}}
{{--            <SubTotaITBIS1>-10000000000000000</SubTotaITBIS1>--}}
{{--            <SubTotaITBIS2>-10000000000000000</SubTotaITBIS2>--}}
{{--            <SubTotaITBIS3>-10000000000000000</SubTotaITBIS3>--}}
{{--            <SubTotalImpuestoAdicional>-10000000000000000</SubTotalImpuestoAdicional>--}}
{{--            <SubTotalExento>-10000000000000000</SubTotalExento>--}}
{{--            <MontoSubTotal>-10000000000000000</MontoSubTotal>--}}
{{--            <Lineas>-99</Lineas>--}}
{{--        </Subtotal>--}}
{{--        <Subtotal>--}}
{{--            <NumeroSubTotal>99</NumeroSubTotal>--}}
{{--            <DescripcionSubtotal>DescripcionSubtotal3</DescripcionSubtotal>--}}
{{--            <Orden>99</Orden>--}}
{{--            <SubTotalMontoGravadoTotal>10000000000000000</SubTotalMontoGravadoTotal>--}}
{{--            <SubTotalMontoGravadoI1>10000000000000000</SubTotalMontoGravadoI1>--}}
{{--            <SubTotalMontoGravadoI2>10000000000000000</SubTotalMontoGravadoI2>--}}
{{--            <SubTotalMontoGravadoI3>10000000000000000</SubTotalMontoGravadoI3>--}}
{{--            <SubTotaITBIS>10000000000000000</SubTotaITBIS>--}}
{{--            <SubTotaITBIS1>10000000000000000</SubTotaITBIS1>--}}
{{--            <SubTotaITBIS2>10000000000000000</SubTotaITBIS2>--}}
{{--            <SubTotaITBIS3>10000000000000000</SubTotaITBIS3>--}}
{{--            <SubTotalImpuestoAdicional>10000000000000000</SubTotalImpuestoAdicional>--}}
{{--            <SubTotalExento>10000000000000000</SubTotalExento>--}}
{{--            <MontoSubTotal>10000000000000000</MontoSubTotal>--}}
{{--            <Lineas>99</Lineas>--}}
{{--        </Subtotal>--}}
{{--    </Subtotales>--}}
{{--    <DescuentosORecargos>--}}
{{--        <DescuentoORecargo>--}}
{{--            <NumeroLinea>1</NumeroLinea>--}}
{{--            <TipoAjuste>D</TipoAjuste>--}}
{{--            <IndicadorNorma1007>0</IndicadorNorma1007>--}}
{{--            <DescripcionDescuentooRecargo>DescripcionDescuentooRecargo1</DescripcionDescuentooRecargo>--}}
{{--            <TipoValor>$</TipoValor>--}}
{{--            <ValorDescuentooRecargo>1</ValorDescuentooRecargo>--}}
{{--            <MontoDescuentooRecargo>1</MontoDescuentooRecargo>--}}
{{--            <MontoDescuentooRecargoOtraMoneda>1</MontoDescuentooRecargoOtraMoneda>--}}
{{--            <IndicadorFacturacionDescuentooRecargo>1</IndicadorFacturacionDescuentooRecargo>--}}
{{--        </DescuentoORecargo>--}}
{{--        <DescuentoORecargo>--}}
{{--            <NumeroLinea>-99</NumeroLinea>--}}
{{--            <TipoAjuste>R</TipoAjuste>--}}
{{--            <IndicadorNorma1007>1</IndicadorNorma1007>--}}
{{--            <DescripcionDescuentooRecargo>DescripcionDescuentooRecargo2</DescripcionDescuentooRecargo>--}}
{{--            <TipoValor>%</TipoValor>--}}
{{--            <ValorDescuentooRecargo>-999.999</ValorDescuentooRecargo>--}}
{{--            <MontoDescuentooRecargo>-10000000000000000</MontoDescuentooRecargo>--}}
{{--            <MontoDescuentooRecargoOtraMoneda>-10000000000000000</MontoDescuentooRecargoOtraMoneda>--}}
{{--            <IndicadorFacturacionDescuentooRecargo>2</IndicadorFacturacionDescuentooRecargo>--}}
{{--        </DescuentoORecargo>--}}
{{--        <DescuentoORecargo>--}}
{{--            <NumeroLinea>99</NumeroLinea>--}}
{{--            <TipoAjuste>D</TipoAjuste>--}}
{{--            <IndicadorNorma1007>0</IndicadorNorma1007>--}}
{{--            <DescripcionDescuentooRecargo>DescripcionDescuentooRecargo3</DescripcionDescuentooRecargo>--}}
{{--            <TipoValor>$</TipoValor>--}}
{{--            <ValorDescuentooRecargo>999.999</ValorDescuentooRecargo>--}}
{{--            <MontoDescuentooRecargo>10000000000000000</MontoDescuentooRecargo>--}}
{{--            <MontoDescuentooRecargoOtraMoneda>10000000000000000</MontoDescuentooRecargoOtraMoneda>--}}
{{--            <IndicadorFacturacionDescuentooRecargo>3</IndicadorFacturacionDescuentooRecargo>--}}
{{--        </DescuentoORecargo>--}}
{{--    </DescuentosORecargos>--}}
{{--    <Paginacion>--}}
{{--        <Pagina>--}}
{{--            <PaginaNo>1</PaginaNo>--}}
{{--            <NoLineaDesde>1</NoLineaDesde>--}}
{{--            <NoLineaHasta>1</NoLineaHasta>--}}
{{--            <SubtotalMontoGravadoPagina>1</SubtotalMontoGravadoPagina>--}}
{{--            <SubtotalMontoGravado1Pagina>1</SubtotalMontoGravado1Pagina>--}}
{{--            <SubtotalMontoGravado2Pagina>1</SubtotalMontoGravado2Pagina>--}}
{{--            <SubtotalMontoGravado3Pagina>1</SubtotalMontoGravado3Pagina>--}}
{{--            <SubtotalExentoPagina>1</SubtotalExentoPagina>--}}
{{--            <SubtotalItbisPagina>1</SubtotalItbisPagina>--}}
{{--            <SubtotalItbis1Pagina>1</SubtotalItbis1Pagina>--}}
{{--            <SubtotalItbis2Pagina>1</SubtotalItbis2Pagina>--}}
{{--            <SubtotalItbis3Pagina>1</SubtotalItbis3Pagina>--}}
{{--            <SubtotalImpuestoAdicionalPagina>1</SubtotalImpuestoAdicionalPagina>--}}
{{--            <SubtotalImpuestoAdicional>--}}
{{--                <SubtotalImpuestoSelectivoConsumoEspecificoPagina>1</SubtotalImpuestoSelectivoConsumoEspecificoPagina>--}}
{{--                <SubtotalOtrosImpuesto>1</SubtotalOtrosImpuesto>--}}
{{--            </SubtotalImpuestoAdicional>--}}
{{--            <MontoSubtotalPagina>1</MontoSubtotalPagina>--}}
{{--            <SubtotalMontoNoFacturablePagina>1</SubtotalMontoNoFacturablePagina>--}}
{{--        </Pagina>--}}
{{--        <Pagina>--}}
{{--            <PaginaNo>1000</PaginaNo>--}}
{{--            <NoLineaDesde>1000</NoLineaDesde>--}}
{{--            <NoLineaHasta>1000</NoLineaHasta>--}}
{{--            <SubtotalMontoGravadoPagina>-10000000000000000</SubtotalMontoGravadoPagina>--}}
{{--            <SubtotalMontoGravado1Pagina>-10000000000000000</SubtotalMontoGravado1Pagina>--}}
{{--            <SubtotalMontoGravado2Pagina>-10000000000000000</SubtotalMontoGravado2Pagina>--}}
{{--            <SubtotalMontoGravado3Pagina>-10000000000000000</SubtotalMontoGravado3Pagina>--}}
{{--            <SubtotalExentoPagina>-10000000000000000</SubtotalExentoPagina>--}}
{{--            <SubtotalItbisPagina>-10000000000000000</SubtotalItbisPagina>--}}
{{--            <SubtotalItbis1Pagina>-10000000000000000</SubtotalItbis1Pagina>--}}
{{--            <SubtotalItbis2Pagina>-10000000000000000</SubtotalItbis2Pagina>--}}
{{--            <SubtotalItbis3Pagina>-10000000000000000</SubtotalItbis3Pagina>--}}
{{--            <SubtotalImpuestoAdicionalPagina>-10000000000000000</SubtotalImpuestoAdicionalPagina>--}}
{{--            <SubtotalImpuestoAdicional>--}}
{{--                <SubtotalImpuestoSelectivoConsumoEspecificoPagina>-10000000000000000--}}
{{--                </SubtotalImpuestoSelectivoConsumoEspecificoPagina>--}}
{{--                <SubtotalOtrosImpuesto>-10000000000000000</SubtotalOtrosImpuesto>--}}
{{--            </SubtotalImpuestoAdicional>--}}
{{--            <MontoSubtotalPagina>-10000000000000000</MontoSubtotalPagina>--}}
{{--            <SubtotalMontoNoFacturablePagina>-10000000000000000</SubtotalMontoNoFacturablePagina>--}}
{{--        </Pagina>--}}
{{--        <Pagina>--}}
{{--            <PaginaNo>2</PaginaNo>--}}
{{--            <NoLineaDesde>2</NoLineaDesde>--}}
{{--            <NoLineaHasta>2</NoLineaHasta>--}}
{{--            <SubtotalMontoGravadoPagina>10000000000000000</SubtotalMontoGravadoPagina>--}}
{{--            <SubtotalMontoGravado1Pagina>10000000000000000</SubtotalMontoGravado1Pagina>--}}
{{--            <SubtotalMontoGravado2Pagina>10000000000000000</SubtotalMontoGravado2Pagina>--}}
{{--            <SubtotalMontoGravado3Pagina>10000000000000000</SubtotalMontoGravado3Pagina>--}}
{{--            <SubtotalExentoPagina>10000000000000000</SubtotalExentoPagina>--}}
{{--            <SubtotalItbisPagina>10000000000000000</SubtotalItbisPagina>--}}
{{--            <SubtotalItbis1Pagina>10000000000000000</SubtotalItbis1Pagina>--}}
{{--            <SubtotalItbis2Pagina>10000000000000000</SubtotalItbis2Pagina>--}}
{{--            <SubtotalItbis3Pagina>10000000000000000</SubtotalItbis3Pagina>--}}
{{--            <SubtotalImpuestoAdicionalPagina>10000000000000000</SubtotalImpuestoAdicionalPagina>--}}
{{--            <SubtotalImpuestoAdicional>--}}
{{--                <SubtotalImpuestoSelectivoConsumoEspecificoPagina>10000000000000000--}}
{{--                </SubtotalImpuestoSelectivoConsumoEspecificoPagina>--}}
{{--                <SubtotalOtrosImpuesto>10000000000000000</SubtotalOtrosImpuesto>--}}
{{--            </SubtotalImpuestoAdicional>--}}
{{--            <MontoSubtotalPagina>10000000000000000</MontoSubtotalPagina>--}}
{{--            <SubtotalMontoNoFacturablePagina>10000000000000000</SubtotalMontoNoFacturablePagina>--}}
{{--        </Pagina>--}}
{{--    </Paginacion>--}}
{{--    <InformacionReferencia>--}}
{{--        <NCFModificado>NCFModificado1</NCFModificado>--}}
{{--        <RNCOtroContribuyente>RNCOtroContribuyente1</RNCOtroContribuyente>--}}
{{--        <FechaNCFModificado>FechaNCFModificado1</FechaNCFModificado>--}}
{{--        <CodigoModificacion>1</CodigoModificacion>--}}
{{--    </InformacionReferencia>--}}
    <FechaHoraFirma>{{ date('d-m-Y H:i:s') }}</FechaHoraFirma>
</ECF>
