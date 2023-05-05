PGDMP                         {            inventario1    15.2    15.2 M    ]           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            ^           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            _           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            `           1262    41459    inventario1    DATABASE     ~   CREATE DATABASE inventario1 WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Spain.1252';
    DROP DATABASE inventario1;
                postgres    false            �            1259    41460    almacen    TABLE     �   CREATE TABLE public.almacen (
    id_almacen character varying(20) NOT NULL,
    nombre_almacen character varying(30) NOT NULL,
    tipo_almacen character varying(20) NOT NULL,
    direccion_almacen character varying(100) NOT NULL
);
    DROP TABLE public.almacen;
       public         heap    postgres    false            �            1259    41463    almacenamiento    TABLE     �   CREATE TABLE public.almacenamiento (
    id_almacenamiento character varying(20) NOT NULL,
    id_articulo integer NOT NULL,
    stock integer NOT NULL
);
 "   DROP TABLE public.almacenamiento;
       public         heap    postgres    false            �            1259    41466    articulo    TABLE     �   CREATE TABLE public.articulo (
    id_articulo integer NOT NULL,
    id_categoria integer NOT NULL,
    nombre_articulo character varying(50) NOT NULL
);
    DROP TABLE public.articulo;
       public         heap    postgres    false            �            1259    41469    articulo_id_articulo_seq    SEQUENCE     �   CREATE SEQUENCE public.articulo_id_articulo_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.articulo_id_articulo_seq;
       public          postgres    false    216            a           0    0    articulo_id_articulo_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.articulo_id_articulo_seq OWNED BY public.articulo.id_articulo;
          public          postgres    false    217            �            1259    41470 	   categoria    TABLE     z   CREATE TABLE public.categoria (
    id_categoria integer NOT NULL,
    nombre_categoria character varying(30) NOT NULL
);
    DROP TABLE public.categoria;
       public         heap    postgres    false            �            1259    41473    categoria_id_categoria_seq    SEQUENCE     �   CREATE SEQUENCE public.categoria_id_categoria_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.categoria_id_categoria_seq;
       public          postgres    false    218            b           0    0    categoria_id_categoria_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.categoria_id_categoria_seq OWNED BY public.categoria.id_categoria;
          public          postgres    false    219            �            1259    41474    detalle_ingreso    TABLE     �   CREATE TABLE public.detalle_ingreso (
    id_detalle_ingreso integer NOT NULL,
    id_ingreso integer NOT NULL,
    id_articulo integer NOT NULL,
    cantidad_ingreso integer NOT NULL,
    precio_ingreso double precision NOT NULL
);
 #   DROP TABLE public.detalle_ingreso;
       public         heap    postgres    false            �            1259    41477 &   detalle_ingreso_id_detalle_ingreso_seq    SEQUENCE     �   CREATE SEQUENCE public.detalle_ingreso_id_detalle_ingreso_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 =   DROP SEQUENCE public.detalle_ingreso_id_detalle_ingreso_seq;
       public          postgres    false    220            c           0    0 &   detalle_ingreso_id_detalle_ingreso_seq    SEQUENCE OWNED BY     q   ALTER SEQUENCE public.detalle_ingreso_id_detalle_ingreso_seq OWNED BY public.detalle_ingreso.id_detalle_ingreso;
          public          postgres    false    221            �            1259    41478    ingreso    TABLE     }   CREATE TABLE public.ingreso (
    id_ingreso integer NOT NULL,
    id_proveedor integer NOT NULL,
    fecha date NOT NULL
);
    DROP TABLE public.ingreso;
       public         heap    postgres    false            �            1259    41481    ingreso_id_ingreso_seq    SEQUENCE     �   CREATE SEQUENCE public.ingreso_id_ingreso_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.ingreso_id_ingreso_seq;
       public          postgres    false    222            d           0    0    ingreso_id_ingreso_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.ingreso_id_ingreso_seq OWNED BY public.ingreso.id_ingreso;
          public          postgres    false    223            �            1259    41482    oficina    TABLE     �   CREATE TABLE public.oficina (
    id_oficina character varying(10) NOT NULL,
    nombre_oficina character varying(20) NOT NULL,
    direccion_oficina character varying(100) NOT NULL,
    id_personal integer NOT NULL
);
    DROP TABLE public.oficina;
       public         heap    postgres    false            �            1259    41485    personal    TABLE     n  CREATE TABLE public.personal (
    id_personal integer NOT NULL,
    id_usuario integer NOT NULL,
    nombre_personal character varying(50) NOT NULL,
    "apellidoP_personal" character varying(50) NOT NULL,
    "apellidoM_personal" character varying(50) NOT NULL,
    correo_personal character varying(50) NOT NULL,
    ci_personal character varying(15) NOT NULL
);
    DROP TABLE public.personal;
       public         heap    postgres    false            �            1259    41488    personal_id_personal_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_id_personal_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.personal_id_personal_seq;
       public          postgres    false    225            e           0    0    personal_id_personal_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.personal_id_personal_seq OWNED BY public.personal.id_personal;
          public          postgres    false    226            �            1259    41489 	   proveedor    TABLE     �   CREATE TABLE public.proveedor (
    id_proveedor integer NOT NULL,
    nombre_proveedor character varying(30) NOT NULL,
    correo_electronico character varying(50) NOT NULL
);
    DROP TABLE public.proveedor;
       public         heap    postgres    false            �            1259    41492    proveedor_id_proveedor_seq    SEQUENCE     �   CREATE SEQUENCE public.proveedor_id_proveedor_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.proveedor_id_proveedor_seq;
       public          postgres    false    227            f           0    0    proveedor_id_proveedor_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.proveedor_id_proveedor_seq OWNED BY public.proveedor.id_proveedor;
          public          postgres    false    228            �            1259    41493    salidas    TABLE     �   CREATE TABLE public.salidas (
    id_salida integer NOT NULL,
    id_almacen character varying(20) NOT NULL,
    id_oficina character varying(20) NOT NULL,
    costo_salida double precision NOT NULL
);
    DROP TABLE public.salidas;
       public         heap    postgres    false            �            1259    41496    salidas_id_salida_seq    SEQUENCE     �   CREATE SEQUENCE public.salidas_id_salida_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.salidas_id_salida_seq;
       public          postgres    false    229            g           0    0    salidas_id_salida_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.salidas_id_salida_seq OWNED BY public.salidas.id_salida;
          public          postgres    false    230            �            1259    41497    usuario    TABLE     �   CREATE TABLE public.usuario (
    id_usuario integer NOT NULL,
    contrasena character varying(20) NOT NULL,
    rol integer NOT NULL,
    nombre character varying(50) NOT NULL
);
    DROP TABLE public.usuario;
       public         heap    postgres    false            �            1259    41500    usuario_id_usuario_seq    SEQUENCE     �   CREATE SEQUENCE public.usuario_id_usuario_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.usuario_id_usuario_seq;
       public          postgres    false    231            h           0    0    usuario_id_usuario_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.usuario_id_usuario_seq OWNED BY public.usuario.id_usuario;
          public          postgres    false    232            �           2604    41501    articulo id_articulo    DEFAULT     |   ALTER TABLE ONLY public.articulo ALTER COLUMN id_articulo SET DEFAULT nextval('public.articulo_id_articulo_seq'::regclass);
 C   ALTER TABLE public.articulo ALTER COLUMN id_articulo DROP DEFAULT;
       public          postgres    false    217    216            �           2604    41502    categoria id_categoria    DEFAULT     �   ALTER TABLE ONLY public.categoria ALTER COLUMN id_categoria SET DEFAULT nextval('public.categoria_id_categoria_seq'::regclass);
 E   ALTER TABLE public.categoria ALTER COLUMN id_categoria DROP DEFAULT;
       public          postgres    false    219    218            �           2604    41503 "   detalle_ingreso id_detalle_ingreso    DEFAULT     �   ALTER TABLE ONLY public.detalle_ingreso ALTER COLUMN id_detalle_ingreso SET DEFAULT nextval('public.detalle_ingreso_id_detalle_ingreso_seq'::regclass);
 Q   ALTER TABLE public.detalle_ingreso ALTER COLUMN id_detalle_ingreso DROP DEFAULT;
       public          postgres    false    221    220            �           2604    41504    ingreso id_ingreso    DEFAULT     x   ALTER TABLE ONLY public.ingreso ALTER COLUMN id_ingreso SET DEFAULT nextval('public.ingreso_id_ingreso_seq'::regclass);
 A   ALTER TABLE public.ingreso ALTER COLUMN id_ingreso DROP DEFAULT;
       public          postgres    false    223    222            �           2604    41505    personal id_personal    DEFAULT     |   ALTER TABLE ONLY public.personal ALTER COLUMN id_personal SET DEFAULT nextval('public.personal_id_personal_seq'::regclass);
 C   ALTER TABLE public.personal ALTER COLUMN id_personal DROP DEFAULT;
       public          postgres    false    226    225            �           2604    41506    proveedor id_proveedor    DEFAULT     �   ALTER TABLE ONLY public.proveedor ALTER COLUMN id_proveedor SET DEFAULT nextval('public.proveedor_id_proveedor_seq'::regclass);
 E   ALTER TABLE public.proveedor ALTER COLUMN id_proveedor DROP DEFAULT;
       public          postgres    false    228    227            �           2604    41507    salidas id_salida    DEFAULT     v   ALTER TABLE ONLY public.salidas ALTER COLUMN id_salida SET DEFAULT nextval('public.salidas_id_salida_seq'::regclass);
 @   ALTER TABLE public.salidas ALTER COLUMN id_salida DROP DEFAULT;
       public          postgres    false    230    229            �           2604    41508    usuario id_usuario    DEFAULT     x   ALTER TABLE ONLY public.usuario ALTER COLUMN id_usuario SET DEFAULT nextval('public.usuario_id_usuario_seq'::regclass);
 A   ALTER TABLE public.usuario ALTER COLUMN id_usuario DROP DEFAULT;
       public          postgres    false    232    231            H          0    41460    almacen 
   TABLE DATA           ^   COPY public.almacen (id_almacen, nombre_almacen, tipo_almacen, direccion_almacen) FROM stdin;
    public          postgres    false    214   �[       I          0    41463    almacenamiento 
   TABLE DATA           O   COPY public.almacenamiento (id_almacenamiento, id_articulo, stock) FROM stdin;
    public          postgres    false    215   �[       J          0    41466    articulo 
   TABLE DATA           N   COPY public.articulo (id_articulo, id_categoria, nombre_articulo) FROM stdin;
    public          postgres    false    216   �[       L          0    41470 	   categoria 
   TABLE DATA           C   COPY public.categoria (id_categoria, nombre_categoria) FROM stdin;
    public          postgres    false    218   /\       N          0    41474    detalle_ingreso 
   TABLE DATA           x   COPY public.detalle_ingreso (id_detalle_ingreso, id_ingreso, id_articulo, cantidad_ingreso, precio_ingreso) FROM stdin;
    public          postgres    false    220   e\       P          0    41478    ingreso 
   TABLE DATA           B   COPY public.ingreso (id_ingreso, id_proveedor, fecha) FROM stdin;
    public          postgres    false    222   �\       R          0    41482    oficina 
   TABLE DATA           ]   COPY public.oficina (id_oficina, nombre_oficina, direccion_oficina, id_personal) FROM stdin;
    public          postgres    false    224   �\       S          0    41485    personal 
   TABLE DATA           �   COPY public.personal (id_personal, id_usuario, nombre_personal, "apellidoP_personal", "apellidoM_personal", correo_personal, ci_personal) FROM stdin;
    public          postgres    false    225   �\       U          0    41489 	   proveedor 
   TABLE DATA           W   COPY public.proveedor (id_proveedor, nombre_proveedor, correo_electronico) FROM stdin;
    public          postgres    false    227   �\       W          0    41493    salidas 
   TABLE DATA           R   COPY public.salidas (id_salida, id_almacen, id_oficina, costo_salida) FROM stdin;
    public          postgres    false    229   �\       Y          0    41497    usuario 
   TABLE DATA           F   COPY public.usuario (id_usuario, contrasena, rol, nombre) FROM stdin;
    public          postgres    false    231   ]       i           0    0    articulo_id_articulo_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.articulo_id_articulo_seq', 1, true);
          public          postgres    false    217            j           0    0    categoria_id_categoria_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.categoria_id_categoria_seq', 1, true);
          public          postgres    false    219            k           0    0 &   detalle_ingreso_id_detalle_ingreso_seq    SEQUENCE SET     U   SELECT pg_catalog.setval('public.detalle_ingreso_id_detalle_ingreso_seq', 1, false);
          public          postgres    false    221            l           0    0    ingreso_id_ingreso_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.ingreso_id_ingreso_seq', 1, false);
          public          postgres    false    223            m           0    0    personal_id_personal_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.personal_id_personal_seq', 1, false);
          public          postgres    false    226            n           0    0    proveedor_id_proveedor_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.proveedor_id_proveedor_seq', 1, false);
          public          postgres    false    228            o           0    0    salidas_id_salida_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.salidas_id_salida_seq', 1, false);
          public          postgres    false    230            p           0    0    usuario_id_usuario_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.usuario_id_usuario_seq', 1, true);
          public          postgres    false    232            �           2606    41510    almacen almacen_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.almacen
    ADD CONSTRAINT almacen_pkey PRIMARY KEY (id_almacen);
 >   ALTER TABLE ONLY public.almacen DROP CONSTRAINT almacen_pkey;
       public            postgres    false    214            �           2606    41512 "   almacenamiento almacenamiento_pkey 
   CONSTRAINT     |   ALTER TABLE ONLY public.almacenamiento
    ADD CONSTRAINT almacenamiento_pkey PRIMARY KEY (id_almacenamiento, id_articulo);
 L   ALTER TABLE ONLY public.almacenamiento DROP CONSTRAINT almacenamiento_pkey;
       public            postgres    false    215    215            �           2606    41514    articulo articulo_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.articulo
    ADD CONSTRAINT articulo_pkey PRIMARY KEY (id_articulo);
 @   ALTER TABLE ONLY public.articulo DROP CONSTRAINT articulo_pkey;
       public            postgres    false    216            �           2606    41516    categoria categoria_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.categoria
    ADD CONSTRAINT categoria_pkey PRIMARY KEY (id_categoria);
 B   ALTER TABLE ONLY public.categoria DROP CONSTRAINT categoria_pkey;
       public            postgres    false    218            �           2606    41518 $   detalle_ingreso detalle_ingreso_pkey 
   CONSTRAINT     ~   ALTER TABLE ONLY public.detalle_ingreso
    ADD CONSTRAINT detalle_ingreso_pkey PRIMARY KEY (id_ingreso, id_detalle_ingreso);
 N   ALTER TABLE ONLY public.detalle_ingreso DROP CONSTRAINT detalle_ingreso_pkey;
       public            postgres    false    220    220            �           2606    41520    ingreso ingreso_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.ingreso
    ADD CONSTRAINT ingreso_pkey PRIMARY KEY (id_ingreso);
 >   ALTER TABLE ONLY public.ingreso DROP CONSTRAINT ingreso_pkey;
       public            postgres    false    222            �           2606    41522    oficina oficina_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.oficina
    ADD CONSTRAINT oficina_pkey PRIMARY KEY (id_oficina);
 >   ALTER TABLE ONLY public.oficina DROP CONSTRAINT oficina_pkey;
       public            postgres    false    224            �           2606    41524    personal personal_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.personal
    ADD CONSTRAINT personal_pkey PRIMARY KEY (id_personal);
 @   ALTER TABLE ONLY public.personal DROP CONSTRAINT personal_pkey;
       public            postgres    false    225            �           2606    41526    proveedor proveedor_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.proveedor
    ADD CONSTRAINT proveedor_pkey PRIMARY KEY (id_proveedor);
 B   ALTER TABLE ONLY public.proveedor DROP CONSTRAINT proveedor_pkey;
       public            postgres    false    227            �           2606    41528    salidas salidas_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.salidas
    ADD CONSTRAINT salidas_pkey PRIMARY KEY (id_salida);
 >   ALTER TABLE ONLY public.salidas DROP CONSTRAINT salidas_pkey;
       public            postgres    false    229            �           2606    41530    usuario usuario_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id_usuario);
 >   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_pkey;
       public            postgres    false    231            �           2606    41531 "   almacenamiento id_almacenamiento_a    FK CONSTRAINT     �   ALTER TABLE ONLY public.almacenamiento
    ADD CONSTRAINT id_almacenamiento_a FOREIGN KEY (id_almacenamiento) REFERENCES public.almacen(id_almacen);
 L   ALTER TABLE ONLY public.almacenamiento DROP CONSTRAINT id_almacenamiento_a;
       public          postgres    false    215    214    3229            �           2606    41536 "   almacenamiento id_almacenamiento_o    FK CONSTRAINT     �   ALTER TABLE ONLY public.almacenamiento
    ADD CONSTRAINT id_almacenamiento_o FOREIGN KEY (id_almacenamiento) REFERENCES public.oficina(id_oficina);
 L   ALTER TABLE ONLY public.almacenamiento DROP CONSTRAINT id_almacenamiento_o;
       public          postgres    false    224    215    3241            �           2606    41541    detalle_ingreso id_articulo    FK CONSTRAINT     �   ALTER TABLE ONLY public.detalle_ingreso
    ADD CONSTRAINT id_articulo FOREIGN KEY (id_articulo) REFERENCES public.articulo(id_articulo);
 E   ALTER TABLE ONLY public.detalle_ingreso DROP CONSTRAINT id_articulo;
       public          postgres    false    220    216    3233            �           2606    41546    almacenamiento id_articulo    FK CONSTRAINT     �   ALTER TABLE ONLY public.almacenamiento
    ADD CONSTRAINT id_articulo FOREIGN KEY (id_articulo) REFERENCES public.articulo(id_articulo);
 D   ALTER TABLE ONLY public.almacenamiento DROP CONSTRAINT id_articulo;
       public          postgres    false    216    3233    215            �           2606    41551    articulo id_categoria    FK CONSTRAINT     �   ALTER TABLE ONLY public.articulo
    ADD CONSTRAINT id_categoria FOREIGN KEY (id_categoria) REFERENCES public.categoria(id_categoria);
 ?   ALTER TABLE ONLY public.articulo DROP CONSTRAINT id_categoria;
       public          postgres    false    3235    216    218            �           2606    41556    detalle_ingreso id_ingreso    FK CONSTRAINT     �   ALTER TABLE ONLY public.detalle_ingreso
    ADD CONSTRAINT id_ingreso FOREIGN KEY (id_ingreso) REFERENCES public.ingreso(id_ingreso);
 D   ALTER TABLE ONLY public.detalle_ingreso DROP CONSTRAINT id_ingreso;
       public          postgres    false    3239    220    222            �           2606    41561    oficina id_personal    FK CONSTRAINT     �   ALTER TABLE ONLY public.oficina
    ADD CONSTRAINT id_personal FOREIGN KEY (id_personal) REFERENCES public.personal(id_personal);
 =   ALTER TABLE ONLY public.oficina DROP CONSTRAINT id_personal;
       public          postgres    false    224    3243    225            �           2606    41566    personal id_usuario    FK CONSTRAINT     �   ALTER TABLE ONLY public.personal
    ADD CONSTRAINT id_usuario FOREIGN KEY (id_usuario) REFERENCES public.usuario(id_usuario) NOT VALID;
 =   ALTER TABLE ONLY public.personal DROP CONSTRAINT id_usuario;
       public          postgres    false    231    225    3249            H      x������ � �      I      x������ � �      J   *   x�3�4����J,Vp��KQI�M<�1_�9��$�+F��� ��
P      L   &   x�3��M,I-�L�QHIUH-N.�,�/������� �r	h      N      x������ � �      P      x������ � �      R      x������ � �      S      x������ � �      U      x������ � �      W      x������ � �      Y      x�3�442�4�LJ-������� &��     